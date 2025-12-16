<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - e-OSIS 2024</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f7fa;
            color: #1a202c;
        }
        
        /* Header */
        .header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        
        .header-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .logo {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 24px;
            font-weight: 800;
        }
        
        .logo-text h1 {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            line-height: 1.2;
        }
        
        .logo-text p {
            font-size: 13px;
            color: #64748b;
            font-weight: 500;
        }
        
        .header-nav {
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .nav-link {
            padding: 10px 20px;
            color: #475569;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            transition: all 0.3s;
        }
        
        .nav-link:hover,
        .nav-link.active {
            background: #f1f5f9;
            color: #2563eb;
        }
        
        .user-menu {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .logout-btn {
            padding: 10px 24px;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }
        
        .logout-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(239, 68, 68, 0.4);
        }
        
        /* Main Content */
        .container {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 24px;
        }
        
        .page-title {
            text-align: center;
            margin-bottom: 48px;
        }
        
        .page-title h2 {
            font-size: 36px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 12px;
        }
        
        .page-title p {
            font-size: 16px;
            color: #64748b;
            font-weight: 500;
        }
        
        .contact-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 24px;
            margin-bottom: 48px;
        }
        
        .contact-card {
            background: white;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 28px;
            margin-bottom: 20px;
        }
        
        .contact-card h3 {
            font-size: 20px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 12px;
        }
        
        .contact-card p {
            font-size: 15px;
            color: #64748b;
            line-height: 1.6;
            margin-bottom: 8px;
        }
        
        .contact-link {
            color: #2563eb;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        
        .contact-link:hover {
            color: #1d4ed8;
        }
        
        .map-section {
            background: white;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .map-section h3 {
            font-size: 28px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 32px;
            text-align: center;
        }
        
        .faq-container {
            display: grid;
            gap: 20px;
        }
        
        .faq-item {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            padding: 24px;
            border-radius: 16px;
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
        }
        
        .faq-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.15);
            border-color: #3b82f6;
        }
        
        .faq-question {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .faq-answer {
            font-size: 15px;
            color: #64748b;
            line-height: 1.6;
            padding-left: 28px;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">🗳️</div>
                <div class="logo-text">
                    <h1>e-OSIS 2024</h1>
                    <p>SMA Negeri 1</p>
                </div>
            </div>
            
            <nav class="header-nav">
                @auth
                    <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    <a href="{{ route('rules') }}" class="nav-link">Aturan</a>
                    <a href="{{ route('contact') }}" class="nav-link active">Kontak</a>
                    <a href="{{ route('profile.edit') }}" class="nav-link">Profil</a>
                    <div class="user-menu">
                        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
                            @csrf
                            <button type="submit" class="logout-btn">Keluar</button>
                        </form>
                    </div>
                @else
                    <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                @endauth
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="page-title">
            <h2>📞 Hubungi Kami</h2>
            <p>Butuh bantuan atau ada pertanyaan? Tim kami siap membantu Anda</p>
        </div>

        <div class="contact-grid">
            <div class="contact-card">
                <div class="contact-icon">📧</div>
                <h3>Email</h3>
                <p>Kirim email kepada kami</p>
                <a href="mailto:osis@smansa.sch.id" class="contact-link">osis@smansa.sch.id</a>
            </div>

            <div class="contact-card">
                <div class="contact-icon">📱</div>
                <h3>Telepon</h3>
                <p>Hubungi kami via telepon</p>
                <a href="tel:+6281234567890" class="contact-link">+62 812-3456-7890</a>
            </div>

            <div class="contact-card">
                <div class="contact-icon">💬</div>
                <h3>Media Sosial</h3>
                <p>Follow kami di Instagram</p>
                <a href="https://instagram.com/osis_smansa" target="_blank" class="contact-link">@osis_smansa</a>
            </div>

            <div class="contact-card">
                <div class="contact-icon">⏰</div>
                <h3>Jam Operasional</h3>
                <p>Senin - Jumat</p>
                <p class="contact-link">07:00 - 15:00 WIB</p>
            </div>
        </div>

        <div class="map-section">
            <h3>❓ Frequently Asked Questions (FAQ)</h3>
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">📌 Bagaimana cara melakukan pemilihan?</div>
                    <div class="faq-answer">Login terlebih dahulu, lalu klik menu "Home" dan pilih tombol "Mulai Voting".</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">📌 Apakah saya bisa mengubah pilihan?</div>
                    <div class="faq-answer">Tidak, setelah memilih Anda tidak dapat mengubah pilihan. Pastikan pilihan Anda sudah benar.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">📌 Bagaimana cara melihat hasil pemilihan?</div>
                    <div class="faq-answer">Setelah login, Anda dapat mengakses hasil melalui tombol "Lihat Hasil" di halaman utama.</div>
                </div>
                <div class="faq-item">
                    <div class="faq-question">📌 Apakah data saya aman?</div>
                    <div class="faq-answer">Ya, sistem kami menggunakan enkripsi dan keamanan tingkat tinggi untuk melindungi data Anda.</div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
