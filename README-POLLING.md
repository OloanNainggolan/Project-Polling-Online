# 📊 Polling Online - Sistem Voting Modern

![Laravel](https://img.shields.io/badge/Laravel-11.x-red?style=for-the-badge&logo=laravel)
![PHP](https://img.shields.io/badge/PHP-8.2+-blue?style=for-the-badge&logo=php)
![License](https://img.shields.io/badge/License-MIT-green?style=for-the-badge)

## ✨ Fitur Utama

- **⚡ Voting Cepat** - Interface sederhana dan intuitif untuk voting
- **📊 Hasil Real-time** - Lihat hasil voting dengan grafik interaktif
- **🔒 One Vote Per User** - Sistem session untuk mencegah voting ganda
- **📈 Grafik Menarik** - Visualisasi data dengan bar chart yang indah
- **🎨 Desain Modern** - Tampilan responsif dengan gradient dan animasi
- **🌙 Dark Mode Ready** - Siap untuk dark mode (bisa dikembangkan)
- **♻️ Reset Polling** - Fitur reset untuk memulai voting dari awal

## 🖼️ Screenshot

### Halaman Welcome
![Welcome Page](https://via.placeholder.com/800x400/667eea/ffffff?text=Welcome+Page)

### Halaman Voting
![Voting Page](https://via.placeholder.com/800x400/6366f1/ffffff?text=Voting+Page)

### Hasil Polling
![Results Page](https://via.placeholder.com/800x400/8b5cf6/ffffff?text=Results+Page)

## 🛠️ Teknologi yang Digunakan

- **Laravel 11** - PHP Framework terbaru
- **PHP 8.2+** - Bahasa pemrograman
- **Blade Template** - Template engine Laravel
- **Session Storage** - Untuk tracking user voting
- **Pure CSS** - Tanpa framework CSS eksternal
- **Google Fonts (Inter)** - Typography modern

## 📋 Prasyarat

Sebelum menjalankan aplikasi, pastikan Anda telah menginstall:

- PHP >= 8.2
- Composer
- MySQL/MariaDB atau database lainnya
- Laravel 11.x
- Web Server (Apache/Nginx) atau Laravel Valet/Laragon

## 🚀 Cara Install

### 1. Clone Repository

```bash
git clone <repository-url>
cd ppw-10
```

### 2. Install Dependencies

```bash
composer install
```

### 3. Setup Environment

```bash
# Copy file .env
cp .env.example .env

# Generate application key
php artisan key:generate
```

### 4. Konfigurasi Database

Edit file `.env` dan sesuaikan konfigurasi database:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nama_database
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Jalankan Migration & Seeder

```bash
# Jalankan migration
php artisan migrate

# Jalankan seeder untuk data awal
php artisan db:seed
```

### 6. Jalankan Aplikasi

```bash
php artisan serve
```

Aplikasi akan berjalan di `http://localhost:8000`

## 📁 Struktur File Penting

```
ppw-10/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PollController.php      # Controller utama polling
│   └── Models/
│       ├── Poll.php                    # Model Poll
│       └── Option.php                  # Model Option
├── database/
│   ├── migrations/
│   │   ├── 2025_10_16_095338_create_polls_table.php
│   │   └── 2025_10_16_095338_create_options_table.php
│   └── seeders/
│       ├── DatabaseSeeder.php
│       └── PollSeeder.php              # Seeder data polling
├── resources/
│   └── views/
│       ├── welcome.blade.php           # Halaman landing
│       ├── poll.blade.php              # Halaman voting
│       └── results.blade.php           # Halaman hasil
└── routes/
    └── web.php                         # Routing aplikasi
```

## 🎯 Cara Penggunaan

### 1. Akses Halaman Utama
Buka browser dan kunjungi `http://localhost:8000`

### 2. Mulai Voting
- Klik tombol "Mulai Voting Sekarang"
- Pilih salah satu opsi yang tersedia
- Klik tombol "Kirim Suara"

### 3. Lihat Hasil
- Setelah voting, Anda akan diarahkan ke halaman hasil
- Lihat grafik bar chart yang menampilkan hasil real-time
- Pilihan Anda akan ditandai dengan badge khusus

### 4. Reset Polling (Optional)
- Di halaman hasil, klik tombol "Reset Polling"
- Konfirmasi reset
- Semua suara akan dikembalikan ke 0

## 🔧 Kustomisasi

### Mengubah Pertanyaan Polling

Edit file `database/seeders/PollSeeder.php`:

```php
$poll = Poll::create([
    'question' => 'Pertanyaan Polling Anda?'
]);
```

### Mengubah Opsi Polling

Edit file `database/seeders/PollSeeder.php`:

```php
$options = [
    '🎯 Opsi 1',
    '🚀 Opsi 2',
    '💡 Opsi 3',
    '⭐ Opsi 4'
];
```

Kemudian jalankan ulang seeder:

```bash
php artisan db:seed --class=PollSeeder
```

### Mengubah Warna Tema

Edit file `resources/views/poll.blade.php` atau `results.blade.php` dan ubah gradient warna:

```css
background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
```

Ganti dengan warna favorit Anda!

## 📊 Database Schema

### Tabel: `polls`
| Kolom      | Tipe        | Deskripsi                |
|------------|-------------|--------------------------|
| id         | BIGINT      | Primary key              |
| question   | VARCHAR(255)| Pertanyaan polling       |
| created_at | TIMESTAMP   | Waktu dibuat             |
| updated_at | TIMESTAMP   | Waktu diupdate           |

### Tabel: `options`
| Kolom       | Tipe        | Deskripsi                |
|-------------|-------------|--------------------------|
| id          | BIGINT      | Primary key              |
| poll_id     | BIGINT      | Foreign key ke polls     |
| option_text | VARCHAR(255)| Teks opsi                |
| votes       | INTEGER     | Jumlah suara             |
| created_at  | TIMESTAMP   | Waktu dibuat             |
| updated_at  | TIMESTAMP   | Waktu diupdate           |

## 🔐 Keamanan

- **CSRF Protection** - Semua form dilindungi dengan CSRF token Laravel
- **Session-based Voting** - Mencegah voting ganda dengan session
- **Input Validation** - Validasi input di controller
- **SQL Injection Protection** - Eloquent ORM mencegah SQL injection

## 🚀 Deployment

### Deploy ke Production

1. **Optimize aplikasi:**
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

2. **Set environment:**
```env
APP_ENV=production
APP_DEBUG=false
```

3. **Setup database production**
4. **Jalankan migration di production**
5. **Setup web server (Nginx/Apache)**

### Deploy ke Shared Hosting

1. Upload semua file kecuali folder `vendor`
2. Jalankan `composer install --optimize-autoloader --no-dev`
3. Setup database dan jalankan migration
4. Arahkan document root ke folder `public`

## 🤝 Kontribusi

Kontribusi selalu diterima! Silakan:

1. Fork repository ini
2. Buat branch fitur baru (`git checkout -b fitur-baru`)
3. Commit perubahan (`git commit -am 'Tambah fitur baru'`)
4. Push ke branch (`git push origin fitur-baru`)
5. Buat Pull Request

## 📝 To-Do List

- [ ] Tambah autentikasi user
- [ ] Multiple polling di satu aplikasi
- [ ] Export hasil ke PDF/Excel
- [ ] Voting dengan deadline/timer
- [ ] Real-time update dengan WebSocket
- [ ] Kategori polling
- [ ] Komentar di polling
- [ ] Dark mode toggle

## 🐛 Troubleshooting

### Error: "SQLSTATE[HY000] [2002] Connection refused"
**Solusi:** Pastikan MySQL/database service sudah running

### Error: "Class 'Option' not found"
**Solusi:** Jalankan `composer dump-autoload`

### Tampilan berantakan
**Solusi:** Clear browser cache atau tekan Ctrl+F5

### Session tidak tersimpan
**Solusi:** Pastikan folder `storage/framework/sessions` writable

## 📄 License

Aplikasi ini menggunakan lisensi MIT. Anda bebas menggunakan, memodifikasi, dan mendistribusikan aplikasi ini.

## 👨‍💻 Developer

Dibuat dengan ❤️ menggunakan Laravel Framework

- **Framework:** Laravel 11
- **Version:** 1.0.0
- **Tahun:** 2025

## 📞 Support

Jika Anda mengalami masalah atau memiliki pertanyaan:

- Buka issue di repository
- Email: your-email@example.com
- Website: https://your-website.com

---

**⭐ Jangan lupa beri star jika project ini membantu Anda!**

Made with 💜 by Laravel Community
