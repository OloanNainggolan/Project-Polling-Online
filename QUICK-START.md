# 🚀 Quick Start Guide - Polling Online

## Cara Menjalankan Aplikasi (Laragon)

### 1️⃣ Pastikan Laragon sudah running
- Buka Laragon
- Klik tombol "Start All"
- Tunggu hingga Apache dan MySQL running (hijau)

### 2️⃣ Setup Database
```bash
# Buka terminal di folder project (Shift + Klik Kanan > Open PowerShell/Terminal)

# Jalankan migration untuk membuat tabel
php artisan migrate

# Jalankan seeder untuk data awal
php artisan db:seed
```

### 3️⃣ Akses Aplikasi
Buka browser dan kunjungi:
```
http://ppw-10.test
```
atau
```
http://localhost/ppw-10
```

## 🎯 Struktur Navigasi

1. **Halaman Welcome** (`/`)
   - Landing page dengan informasi aplikasi
   - Tombol "Mulai Voting Sekarang"

2. **Halaman Voting** (`/poll`)
   - Pilih salah satu opsi
   - Klik "Kirim Suara"
   - Otomatis redirect ke hasil

3. **Halaman Hasil** (`/results`)
   - Lihat grafik bar chart
   - Tabel ranking
   - Tombol reset polling

## ⚙️ Commands Berguna

```bash
# Reset database dan seeder
php artisan migrate:fresh --seed

# Clear cache semua
php artisan optimize:clear

# Lihat routes
php artisan route:list

# Jalankan server (jika tidak pakai Laragon)
php artisan serve
```

## 🎨 Fitur Menarik

- ✅ Voting sekali per user (session-based)
- ✅ Grafik real-time yang indah
- ✅ Animasi smooth
- ✅ Emoji pada opsi 🏝️🗻🏖️
- ✅ Responsive design
- ✅ Reset polling feature

## 🐛 Troubleshooting Cepat

**Problem:** Database error
**Fix:** Cek konfigurasi `.env` dan pastikan MySQL running

**Problem:** Session tidak berfungsi
**Fix:** `php artisan optimize:clear`

**Problem:** Tampilan berantakan
**Fix:** Clear browser cache (Ctrl+F5)

**Problem:** Route tidak ditemukan
**Fix:** `php artisan route:cache`

## 📱 Test Fitur

1. Buka 2 tab browser
2. Tab 1: Vote opsi A
3. Tab 2: Coba vote lagi → akan ditolak ✅
4. Tab 1: Lihat hasil → badge "Pilihan Anda" muncul ✅
5. Reset polling → votes kembali 0 ✅

## 💡 Tips

- Gunakan **Ctrl+Shift+I** untuk buka DevTools
- Gunakan **Incognito Mode** untuk test session baru
- Gunakan **Network Tab** untuk debug request

---

**Happy Coding! 🎉**

Jika ada pertanyaan, cek `README-POLLING.md` untuk dokumentasi lengkap.
