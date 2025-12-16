# 🔐 Panduan Install Authentication System

## Persyaratan
- PHP 8.2+
- Composer
- Node.js dan NPM
- Laravel 11

## Langkah-langkah Instalasi

### 1. Install Laravel Breeze
```bash
composer require laravel/breeze --dev
```

### 2. Install Breeze dengan Blade Stack
```bash
php artisan breeze:install blade
```

Pilih opsi berikut saat ditanya:
- **Which testing framework do you prefer?** → **PHPUnit**
- **Would you like to initialize a Git repository?** → **No**

### 3. Install Dependencies Node.js
```bash
npm install
```

### 4. Build Assets
```bash
npm run build
```

Atau untuk development dengan hot reload:
```bash
npm run dev
```

### 5. Run Migrations
Jalankan migration untuk membuat tabel users, password_resets, sessions, dan votes:
```bash
php artisan migrate
```

Jika ditanya apakah ingin membuat database, pilih **Yes**.

### 6. Seed Database dengan Data Polling
```bash
php artisan db:seed --class=PollSeeder
```

### 7. Start Development Server
```bash
php artisan serve
```

Buka browser dan akses:
- **http://localhost:8000** → Landing page dengan login/register
- **http://localhost:8000/register** → Form registrasi
- **http://localhost:8000/login** → Form login

## Alur Penggunaan

### Untuk User Baru:
1. Buka **http://localhost:8000**
2. Klik tombol **Register**
3. Isi form registrasi:
   - Name: Nama lengkap Anda
   - Email: Email valid
   - Password: Minimal 8 karakter
   - Confirm Password: Ulangi password
4. Setelah register, otomatis login
5. Akan redirect ke halaman polling
6. Pilih salah satu opsi dan klik **Vote**
7. Setelah vote, lihat hasil dalam bentuk chart interaktif

### Untuk User yang Sudah Terdaftar:
1. Buka **http://localhost:8000**
2. Klik tombol **Login**
3. Masukkan email dan password
4. Klik **Log In**
5. Langsung masuk ke halaman polling
6. Vote atau lihat hasil jika sudah pernah vote

## Fitur Authentication

### ✅ Yang Sudah Diimplementasikan:
- ✅ Register system dengan validasi
- ✅ Login system dengan session
- ✅ Email verification (optional)
- ✅ Password reset
- ✅ Logout functionality
- ✅ Profile management
- ✅ Auth middleware untuk protect routes
- ✅ One vote per user enforcement via database
- ✅ Vote tracking dengan user_id
- ✅ Chart visualization dengan Chart.js
- ✅ Responsive design

### 🔐 Keamanan:
- Password di-hash dengan bcrypt
- CSRF protection
- Session management
- Unique constraint: satu user hanya bisa vote 1 kali per poll
- Auth middleware melindungi semua route polling

## Database Schema

### Table: votes
```sql
- id (bigint, primary key, auto increment)
- user_id (bigint, foreign key → users.id)
- poll_id (bigint, foreign key → polls.id)
- option_id (bigint, foreign key → options.id)
- created_at (timestamp)
- updated_at (timestamp)
- UNIQUE(user_id, poll_id) → Enforce one vote per user
```

### Relationships:
- **Vote** belongs to **User**
- **Vote** belongs to **Poll**
- **Vote** belongs to **Option**
- **User** has many **Votes**
- **Poll** has many **Votes**
- **Option** has many **Votes**

## Troubleshooting

### Error: "Class 'Breeze' not found"
```bash
composer dump-autoload
php artisan optimize:clear
```

### Error: "npm: command not found"
Install Node.js terlebih dahulu dari https://nodejs.org/

### Error: "SQLSTATE[HY000] [1049] Unknown database"
Buat database terlebih dahulu di phpMyAdmin atau jalankan:
```bash
php artisan migrate --force
```

### Port 8000 sudah digunakan
```bash
php artisan serve --port=8080
```

### Assets tidak ter-compile
```bash
npm run build
```

## Testing

### Test Register
```bash
php artisan tinker
```
```php
$user = App\Models\User::create([
    'name' => 'Test User',
    'email' => 'test@example.com',
    'password' => bcrypt('password123')
]);
```

### Test Vote Constraint
```bash
php artisan tinker
```
```php
// Vote pertama (berhasil)
App\Models\Vote::create([
    'user_id' => 1,
    'poll_id' => 1,
    'option_id' => 1
]);

// Vote kedua dengan user sama (akan error)
App\Models\Vote::create([
    'user_id' => 1,
    'poll_id' => 1,
    'option_id' => 2
]);
// Error: SQLSTATE[23000]: Integrity constraint violation
```

## Next Steps

Setelah install selesai:
1. ✅ Coba register user baru
2. ✅ Login dengan user tersebut
3. ✅ Lakukan voting
4. ✅ Coba vote lagi (harus muncul pesan "already voted")
5. ✅ Logout dan login dengan user berbeda
6. ✅ User kedua bisa vote
7. ✅ Lihat hasil chart dengan warna gradient yang menarik

## File yang Dibuat/Diubah

### New Files:
- `database/migrations/2025_12_13_000000_create_votes_table.php`
- `app/Models/Vote.php`
- `resources/views/welcome.blade.php` (updated)
- `INSTALL-AUTH.md` (this file)

### Modified Files:
- `app/Http/Controllers/PollController.php`
- `routes/web.php`
- `resources/views/poll.blade.php`
- `resources/views/results.blade.php`

## Dokumentasi Lebih Lanjut

- [Laravel Breeze Documentation](https://laravel.com/docs/11.x/starter-kits#laravel-breeze)
- [Laravel Authentication](https://laravel.com/docs/11.x/authentication)
- [Chart.js Documentation](https://www.chartjs.org/docs/latest/)

---

**Happy Voting! 🎉**
