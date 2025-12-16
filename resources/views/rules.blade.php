<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aturan Pemilihan - e-OSIS 2024</title>
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
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
            min-height: 100vh;
            padding: 24px;
        }
        
        .header {
            background: white;
            padding: 20px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
            position: sticky;
            top: 0;
            z-index: 100;
            margin-bottom: 32px;
        }
        
        .header-content {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 32px;
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
        
        .header-btn {
            padding: 12px 28px;
            background: linear-gradient(135deg, #2563eb 0%, #1d4ed8 100%);
            color: white;
            text-decoration: none;
            border-radius: 10px;
            font-weight: 600;
            font-size: 15px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
        }
        
        .header-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.4);
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
        
        .container {
            max-width: 1100px;
            margin: 0 auto;
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 40px;
            background: white;
            padding: 48px;
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
        
        .icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 56px;
            margin-bottom: 24px;
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.3);
        }
        
        h1 {
            font-size: 36px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 12px;
        }
        
        .subtitle {
            font-size: 16px;
            color: #64748b;
            font-weight: 500;
        }
        
        .rules-section {
            background: white;
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
        
        .section-title {
            font-size: 24px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .section-icon {
            width: 48px;
            height: 48px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
        }
        
        .rule-item {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border-left: 4px solid #3b82f6;
            border-radius: 12px;
            padding: 20px 24px;
            margin-bottom: 16px;
            transition: all 0.3s;
        }
        
        .rule-item:hover {
            transform: translateX(8px);
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.15);
        }
        
        .rule-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border-radius: 8px;
            font-weight: 800;
            font-size: 16px;
            margin-right: 12px;
        }
        
        .rule-text {
            display: inline;
            font-size: 16px;
            color: #334155;
            font-weight: 500;
            line-height: 1.6;
        }
        
        .important-box {
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 100%);
            border: 2px solid #fbbf24;
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 24px;
        }
        
        .important-title {
            font-size: 20px;
            font-weight: 800;
            color: #78350f;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .important-text {
            font-size: 15px;
            color: #78350f;
            font-weight: 600;
            line-height: 1.6;
        }
        
        .timeline-section {
            background: white;
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
        
        .timeline-item {
            display: flex;
            gap: 20px;
            margin-bottom: 32px;
            position: relative;
        }
        
        .timeline-item:last-child {
            margin-bottom: 0;
        }
        
        .timeline-item:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 26px;
            top: 60px;
            width: 2px;
            height: calc(100% + 10px);
            background: linear-gradient(180deg, #3b82f6 0%, #bfdbfe 100%);
        }
        
        .timeline-number {
            width: 54px;
            height: 54px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 800;
            color: white;
            flex-shrink: 0;
            box-shadow: 0 6px 16px rgba(59, 130, 246, 0.3);
        }
        
        .timeline-content {
            flex: 1;
        }
        
        .timeline-date {
            font-size: 14px;
            font-weight: 700;
            color: #3b82f6;
            margin-bottom: 8px;
        }
        
        .timeline-title {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 6px;
        }
        
        .timeline-desc {
            font-size: 14px;
            color: #64748b;
            font-weight: 500;
            line-height: 1.6;
        }
        
        .cta-section {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 24px;
            padding: 48px;
            text-align: center;
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.4);
        }
        
        .cta-title {
            font-size: 28px;
            font-weight: 800;
            color: white;
            margin-bottom: 16px;
        }
        
        .cta-text {
            font-size: 16px;
            color: rgba(255, 255, 255, 0.9);
            font-weight: 500;
            margin-bottom: 32px;
        }
        
        .cta-button {
            display: inline-block;
            padding: 16px 48px;
            background: white;
            color: #1d4ed8;
            text-decoration: none;
            border-radius: 12px;
            font-weight: 800;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        
        .cta-button:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }
        
        @media (max-width: 768px) {
            body {
                padding: 16px;
            }
            
            .page-header {
                padding: 32px 24px;
            }
            
            h1 {
                font-size: 28px;
            }
            
            .header {
                flex-direction: column;
                gap: 16px;
                padding: 20px;
            }
            
            .user-section {
                width: 100%;
                justify-content: space-between;
            }
            
            .rules-section, .timeline-section, .cta-section {
                padding: 24px;
            }
            
            .timeline-item {
                flex-direction: column;
            }
            
            .timeline-item::after {
                display: none;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">📋</div>
                <div class="logo-text">
                    <h1>Aturan Pemilihan</h1>
                    <p>e-OSIS 2024</p>
                </div>
            </div>
            
            <nav class="header-nav">
                @guest
                    <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    <a href="{{ route('login') }}" class="header-btn">Login / Daftar</a>
                @else
                    <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    <a href="{{ route('rules') }}" class="nav-link active">Aturan</a>
                    <a href="{{ route('contact') }}" class="nav-link">Kontak</a>
                    <a href="{{ route('profile.edit') }}" class="nav-link">Profil</a>
                    <div class="user-menu">
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-btn">Keluar</button>
                        </form>
                    </div>
                @endguest
            </nav>
        </div>
    </header>
    
    <div class="container">
        <div class="page-header">
            <div class="icon">📋</div>
            <h1>Aturan & Ketentuan Pemilihan</h1>
            <p class="subtitle">Baca dengan teliti sebelum melakukan pemilihan</p>
        </div>
        
        <div class="important-box">
            <div class="important-title">
                ⚠️ PENTING!
            </div>
            <p class="important-text">
                Setiap pemilih hanya dapat memberikan 1 (satu) suara untuk 1 (satu) pasangan calon. 
                Keputusan pemilihan bersifat final dan tidak dapat diubah setelah dikonfirmasi.
            </p>
        </div>
        
        <div class="rules-section">
            <div class="section-title">
                <div class="section-icon">📜</div>
                Ketentuan Umum Pemilih
            </div>
            
            <div class="rule-item">
                <span class="rule-number">1</span>
                <span class="rule-text">Setiap siswa/siswi yang terdaftar sebagai pemilih wajib memiliki akun e-OSIS yang terverifikasi</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">2</span>
                <span class="rule-text">Pemilih hanya dapat menggunakan 1 (satu) akun untuk memberikan suara</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">3</span>
                <span class="rule-text">Pemilihan dilakukan secara online melalui platform e-OSIS pada waktu yang telah ditentukan</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">4</span>
                <span class="rule-text">Setiap pemilih wajib menjaga kerahasiaan akun dan password masing-masing</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">5</span>
                <span class="rule-text">Dilarang keras melakukan kecurangan, manipulasi, atau mempengaruhi pemilih lain secara tidak sah</span>
            </div>
        </div>
        
        <div class="rules-section">
            <div class="section-title">
                <div class="section-icon">✅</div>
                Tata Cara Pemilihan
            </div>
            
            <div class="rule-item">
                <span class="rule-number">1</span>
                <span class="rule-text">Login ke sistem e-OSIS menggunakan akun yang telah terdaftar</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">2</span>
                <span class="rule-text">Pilih menu "Pemilihan" atau klik tombol "Mulai Vote" pada halaman utama</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">3</span>
                <span class="rule-text">Baca dengan teliti profil setiap pasangan calon yang tersedia</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">4</span>
                <span class="rule-text">Pilih 1 (satu) pasangan calon dengan mengklik card kandidat yang diinginkan</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">5</span>
                <span class="rule-text">Klik tombol "Kirim Vote" untuk mengkonfirmasi pilihan Anda</span>
            </div>
            
            <div class="rule-item">
                <span class="rule-number">6</span>
                <span class="rule-text">Setelah berhasil memilih, Anda dapat melihat hasil sementara pada menu "Hasil"</span>
            </div>
        </div>
        
        <div class="timeline-section">
            <div class="section-title">
                <div class="section-icon">📅</div>
                Timeline Pemilihan
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">1</div>
                <div class="timeline-content">
                    <div class="timeline-date">10 - 12 Desember 2024</div>
                    <div class="timeline-title">Masa Sosialisasi & Kampanye</div>
                    <div class="timeline-desc">Periode sosialisasi program kerja dan visi-misi dari setiap pasangan calon kepada seluruh siswa</div>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">2</div>
                <div class="timeline-content">
                    <div class="timeline-date">13 Desember 2024</div>
                    <div class="timeline-title">Hari Pemilihan (08:00 - 15:00 WIB)</div>
                    <div class="timeline-desc">Pemilihan berlangsung secara online. Semua pemilih dapat memberikan suara melalui platform e-OSIS</div>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">3</div>
                <div class="timeline-content">
                    <div class="timeline-date">13 Desember 2024 (16:00 WIB)</div>
                    <div class="timeline-title">Pengumuman Hasil</div>
                    <div class="timeline-desc">Hasil pemilihan akan diumumkan secara resmi dan dipublikasikan melalui sistem e-OSIS</div>
                </div>
            </div>
            
            <div class="timeline-item">
                <div class="timeline-number">4</div>
                <div class="timeline-content">
                    <div class="timeline-date">16 Desember 2024</div>
                    <div class="timeline-title">Pelantikan Ketua OSIS Terpilih</div>
                    <div class="timeline-desc">Pelantikan resmi Ketua dan Wakil Ketua OSIS terpilih periode 2024/2025</div>
                </div>
            </div>
        </div>
        
        <div class="cta-section">
            <div class="cta-title">Siap Memberikan Suara?</div>
            <p class="cta-text">Pastikan Anda sudah membaca semua aturan dan ketentuan di atas</p>
            @auth
                <a href="{{ route('poll') }}" class="cta-button">Mulai Vote Sekarang →</a>
            @else
                <a href="{{ route('login') }}" class="cta-button">Login untuk Vote →</a>
            @endauth
        </div>
    </div>
</body>
</html>
