# 🔧 Panduan Pengembangan Lanjutan

## 🎨 Kustomisasi Tampilan

### Mengubah Warna Tema

**Poll.blade.php:**
```css
/* Ubah gradient utama */
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);

/* Menjadi warna lain, misalnya: */
background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%); /* Pink to Red */
background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%); /* Blue to Cyan */
background: linear-gradient(135deg, #43e97b 0%, #38f9d7 100%); /* Green to Teal */
```

### Mengubah Font
```html
<!-- Ganti Google Fonts di head section -->
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

<!-- Lalu update CSS -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
</style>
```

### Menambah Animasi
```css
/* Hover effect keren */
.option-card:hover {
    transform: translateX(5px) scale(1.02);
    box-shadow: 0 10px 30px rgba(99, 102, 241, 0.3);
}

/* Bounce animation */
@keyframes bounce {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
}

.cta-button {
    animation: bounce 2s infinite;
}
```

## 📊 Menambah Fitur Baru

### 1. Multiple Choice Voting

**Migration:**
```php
Schema::table('options', function (Blueprint $table) {
    $table->boolean('can_select_multiple')->default(false);
});
```

**Form:**
```html
<input type="checkbox" name="option_ids[]" value="{{ $option->id }}">
```

**Controller:**
```php
public function vote(Request $request)
{
    $request->validate([
        'option_ids' => 'required|array',
        'option_ids.*' => 'exists:options,id'
    ]);
    
    foreach ($request->option_ids as $optionId) {
        Option::find($optionId)->increment('votes');
    }
}
```

### 2. Voting dengan Deadline

**Migration:**
```php
Schema::table('polls', function (Blueprint $table) {
    $table->timestamp('deadline')->nullable();
});
```

**Controller:**
```php
public function index()
{
    $poll = Poll::with('options')->first();
    
    if ($poll->deadline && now()->gt($poll->deadline)) {
        return redirect()->route('results')
            ->with('error', 'Voting sudah ditutup!');
    }
    
    return view('poll', compact('poll'));
}
```

**View:**
```blade
@if($poll->deadline)
    <div class="countdown">
        Berakhir: {{ $poll->deadline->diffForHumans() }}
    </div>
@endif
```

### 3. User Authentication

```bash
php artisan breeze:install
```

**Migration:**
```php
Schema::table('options', function (Blueprint $table) {
    $table->json('voter_ids')->nullable();
});
```

**Controller:**
```php
public function vote(Request $request)
{
    if (!auth()->check()) {
        return redirect()->route('login')
            ->with('error', 'Silakan login terlebih dahulu');
    }
    
    $option = Option::find($request->option_id);
    $voters = json_decode($option->voter_ids, true) ?? [];
    
    if (in_array(auth()->id(), $voters)) {
        return back()->with('error', 'Anda sudah voting!');
    }
    
    $voters[] = auth()->id();
    $option->update([
        'votes' => $option->votes + 1,
        'voter_ids' => json_encode($voters)
    ]);
}
```

### 4. Export Hasil ke PDF

```bash
composer require barryvdh/laravel-dompdf
```

**Controller:**
```php
use Barryvdh\DomPDF\Facade\Pdf;

public function exportPdf()
{
    $poll = Poll::with('options')->first();
    $totalVotes = $poll->options->sum('votes');
    
    $pdf = Pdf::loadView('pdf.results', compact('poll', 'totalVotes'));
    return $pdf->download('hasil-polling.pdf');
}
```

**Route:**
```php
Route::get('/results/export', [PollController::class, 'exportPdf'])->name('results.export');
```

### 5. Real-time dengan Broadcasting

```bash
composer require pusher/pusher-php-server
```

**Event:**
```php
php artisan make:event VoteCasted

// app/Events/VoteCasted.php
public function __construct(public Option $option)
{
    //
}

public function broadcastOn()
{
    return new Channel('polling');
}
```

**Broadcast:**
```php
broadcast(new VoteCasted($option));
```

**JavaScript:**
```javascript
Echo.channel('polling')
    .listen('VoteCasted', (e) => {
        // Update UI real-time
        updateResults(e.option);
    });
```

## 🗄️ Database Advanced

### Indexing untuk Performance

```php
Schema::table('options', function (Blueprint $table) {
    $table->index('poll_id');
    $table->index('votes');
});
```

### Soft Deletes

```php
Schema::table('polls', function (Blueprint $table) {
    $table->softDeletes();
});

// Model
use Illuminate\Database\Eloquent\SoftDeletes;

class Poll extends Model
{
    use SoftDeletes;
}
```

### Pivot Table untuk Many-to-Many

```php
Schema::create('user_votes', function (Blueprint $table) {
    $table->id();
    $table->foreignId('user_id')->constrained()->onDelete('cascade');
    $table->foreignId('option_id')->constrained()->onDelete('cascade');
    $table->timestamp('voted_at');
});
```

## 🔐 Security Best Practices

### Rate Limiting

**RouteServiceProvider:**
```php
RateLimiter::for('voting', function (Request $request) {
    return Limit::perMinute(3)->by($request->ip());
});
```

**Routes:**
```php
Route::post('/vote', [PollController::class, 'vote'])
    ->middleware('throttle:voting');
```

### SQL Injection Prevention

```php
// ✅ Good - Eloquent ORM
Option::where('id', $id)->first();

// ❌ Bad - Raw SQL
DB::select("SELECT * FROM options WHERE id = $id");

// ✅ Good - Raw SQL dengan binding
DB::select("SELECT * FROM options WHERE id = ?", [$id]);
```

### XSS Prevention

```blade
{{-- ✅ Good - Escaped --}}
{{ $option->option_text }}

{{-- ❌ Bad - Unescaped --}}
{!! $option->option_text !!}
```

## 🎯 Testing

### Feature Test

```bash
php artisan make:test VotingTest
```

```php
public function test_user_can_vote()
{
    $option = Option::factory()->create();
    
    $response = $this->post('/vote', [
        'option_id' => $option->id
    ]);
    
    $response->assertRedirect('/results');
    $this->assertDatabaseHas('options', [
        'id' => $option->id,
        'votes' => 1
    ]);
}

public function test_user_cannot_vote_twice()
{
    $option = Option::factory()->create();
    
    $this->post('/vote', ['option_id' => $option->id]);
    $response = $this->post('/vote', ['option_id' => $option->id]);
    
    $response->assertRedirect('/poll');
    $response->assertSessionHas('error');
}
```

### Unit Test

```php
public function test_poll_has_many_options()
{
    $poll = Poll::factory()->create();
    $options = Option::factory()->count(3)->create([
        'poll_id' => $poll->id
    ]);
    
    $this->assertCount(3, $poll->options);
}
```

## 📱 API Development

### API Routes

**routes/api.php:**
```php
Route::get('/polls/{poll}', function (Poll $poll) {
    return $poll->load('options');
});

Route::post('/polls/{poll}/vote', function (Request $request, Poll $poll) {
    $option = $poll->options()->find($request->option_id);
    $option->increment('votes');
    
    return response()->json([
        'message' => 'Vote recorded',
        'option' => $option
    ]);
});
```

### API Resource

```bash
php artisan make:resource PollResource
```

```php
public function toArray($request)
{
    return [
        'id' => $this->id,
        'question' => $this->question,
        'options' => OptionResource::collection($this->options),
        'total_votes' => $this->options->sum('votes'),
        'created_at' => $this->created_at->format('Y-m-d H:i:s'),
    ];
}
```

## 🚀 Performance Optimization

### Caching

```php
use Illuminate\Support\Facades\Cache;

public function results()
{
    $poll = Cache::remember('poll_results', 60, function () {
        return Poll::with('options')->first();
    });
    
    return view('results', compact('poll'));
}

// Clear cache setelah voting
Cache::forget('poll_results');
```

### Eager Loading

```php
// ❌ N+1 Problem
$poll = Poll::find(1);
foreach ($poll->options as $option) {
    echo $option->option_text;
}

// ✅ Eager Loading
$poll = Poll::with('options')->find(1);
foreach ($poll->options as $option) {
    echo $option->option_text;
}
```

### Query Optimization

```php
// Only select needed columns
$options = Option::select('id', 'option_text', 'votes')
    ->where('poll_id', 1)
    ->get();

// Use chunk for large datasets
Option::chunk(100, function ($options) {
    foreach ($options as $option) {
        // Process
    }
});
```

## 📦 Deployment

### Production Checklist

```bash
# 1. Optimize autoloader
composer install --optimize-autoloader --no-dev

# 2. Cache config
php artisan config:cache

# 3. Cache routes
php artisan route:cache

# 4. Cache views
php artisan view:cache

# 5. Set permissions
chmod -R 755 storage bootstrap/cache

# 6. Run migrations
php artisan migrate --force

# 7. Set .env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
```

### Server Configuration

**Nginx:**
```nginx
server {
    listen 80;
    server_name your-domain.com;
    root /path/to/project/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

---

**Happy Developing! 🎉**

Untuk pertanyaan lebih lanjut, silakan cek dokumentasi Laravel official: https://laravel.com/docs
