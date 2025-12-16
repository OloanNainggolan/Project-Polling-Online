<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemilihan Ketua OSIS 2024 - SMA Negeri 1</title>
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
        
        .nav-link:hover {
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
        
        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: #64748b;
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
        
        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #60a5fa 100%);
            padding: 80px 24px;
            text-align: center;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -10%;
            width: 600px;
            height: 600px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }
        
        .hero::after {
            content: '';
            position: absolute;
            bottom: -30%;
            left: -5%;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.08);
            border-radius: 50%;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
            z-index: 10;
        }
        
        .hero-icon {
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            margin-bottom: 24px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
        }
        
        .hero h2 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 16px;
            line-height: 1.2;
        }
        
        .hero-subtitle {
            font-size: 18px;
            margin-bottom: 12px;
            font-weight: 600;
            opacity: 0.95;
        }
        
        .hero-desc {
            font-size: 16px;
            opacity: 0.9;
            margin-bottom: 40px;
            line-height: 1.7;
        }
        
        .hero-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }
        
        .btn-primary, .btn-secondary {
            padding: 16px 36px;
            border-radius: 12px;
            font-weight: 700;
            font-size: 16px;
            text-decoration: none;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
        }
        
        .btn-primary {
            background: white;
            color: #2563eb;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
        }
        
        .btn-primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.2);
        }
        
        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 2px solid white;
            backdrop-filter: blur(10px);
        }
        
        .btn-secondary:hover {
            background: white;
            color: #2563eb;
        }
        
        /* Candidates Section */
        .section {
            padding: 80px 24px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-header h3 {
            font-size: 36px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 16px;
        }
        
        .section-header p {
            font-size: 16px;
            color: #64748b;
            font-weight: 500;
        }
        
        .candidates-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
        }
        
        .candidate-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            transition: all 0.3s;
            cursor: pointer;
        }
        
        .candidate-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(37, 99, 235, 0.2);
        }
        
        .candidate-header {
            padding: 32px;
            text-align: center;
            position: relative;
        }
        
        .candidate-header.blue { background: linear-gradient(135deg, #3b82f6 0%, #2563eb 100%); }
        .candidate-header.red { background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%); }
        .candidate-header.cyan { background: linear-gradient(135deg, #06b6d4 0%, #0891b2 100%); }
        
        .candidate-number {
            width: 80px;
            height: 80px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            font-weight: 800;
            color: #2563eb;
            margin: 0 auto 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .candidate-name {
            color: white;
            font-size: 18px;
            font-weight: 700;
            line-height: 1.4;
        }
        
        .candidate-body {
            padding: 24px;
            text-align: center;
        }
        
        .candidate-label {
            font-size: 14px;
            color: #64748b;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        /* Features Section */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }
        
        .feature-card {
            background: white;
            padding: 32px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
        }
        
        .feature-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 24px rgba(37, 99, 235, 0.15);
        }
        
        .feature-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            margin-bottom: 20px;
        }
        
        .feature-card h4 {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 12px;
        }
        
        .feature-card p {
            font-size: 14px;
            color: #64748b;
            line-height: 1.7;
        }
        
        /* Steps Section */
        .steps-section {
            background: linear-gradient(135deg, #eff6ff 0%, #dbeafe 100%);
        }
        
        .steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 24px;
        }
        
        .step-card {
            background: white;
            padding: 32px;
            border-radius: 16px;
            text-align: center;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .step-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            font-weight: 800;
            margin: 0 auto 20px;
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.3);
        }
        
        .step-card h4 {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 12px;
        }
        
        .step-card p {
            font-size: 14px;
            color: #64748b;
            line-height: 1.7;
        }
        
        /* CTA Section */
        .cta-section {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 100%);
            padding: 80px 24px;
            text-align: center;
            color: white;
        }
        
        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .cta-section h3 {
            font-size: 36px;
            font-weight: 800;
            margin-bottom: 16px;
        }
        
        .cta-section p {
            font-size: 18px;
            margin-bottom: 32px;
            opacity: 0.95;
        }
        
        /* Footer */
        .footer {
            background: #1e293b;
            color: #94a3b8;
            padding: 60px 24px 30px;
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }
        
        .footer-section h4 {
            color: white;
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 20px;
        }
        
        .footer-section p, .footer-section a {
            font-size: 14px;
            line-height: 1.8;
            color: #94a3b8;
            text-decoration: none;
            display: block;
            margin-bottom: 8px;
        }
        
        .footer-section a:hover {
            color: #60a5fa;
        }
        
        .footer-bottom {
            border-top: 1px solid #334155;
            padding-top: 24px;
            text-align: center;
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .hero h2 { font-size: 32px; }
            .section-header h3 { font-size: 28px; }
            .header-content { flex-direction: column; gap: 16px; }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">📋</div>
                <div class="logo-text">
                    <h1>e-OSIS 2024</h1>
                    <p>Komisi Pemilihan Umum OSIS</p>
                </div>
            </div>
            <div class="header-nav">
                @guest
                    <!-- Guest: Hanya tampilkan Home -->
                    <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    <a href="{{ route('login') }}" class="header-btn">Login / Daftar</a>
                @else
                    <!-- Authenticated: Tampilkan semua menu -->
                    <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                    <a href="{{ route('rules') }}" class="nav-link">Aturan</a>
                    <a href="{{ route('contact') }}" class="nav-link">Kontak</a>
                    <a href="{{ route('profile.edit') }}" class="nav-link">Profil</a>
                    <div class="user-menu">
                        <form method="POST" action="{{ route('logout') }}" style="display: inline;">
                            @csrf
                            <button type="submit" class="logout-btn">Keluar</button>
                        </form>
                    </div>
                @endguest
            </div>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-icon">✓</div>
            <h2>Pemilihan Ketua OSIS 2024</h2>
            <p class="hero-subtitle">Sistem Pemilihan Elektronik</p>
            <p class="hero-desc">
                Gunakan hak pilih Anda dengan mudah, aman, dan transparan. Suara Anda menentukan masa depan OSIS yang lebih baik.
            </p>
            <div class="hero-buttons">
                @guest
                    <a href="{{ route('register') }}" class="btn-primary">
                        📝 Daftar & Mulai Memilih
                    </a>
                    <a href="#candidates" class="btn-secondary">
                        📊 Pelajari Lebih Lanjut
                    </a>
                @else
                    <a href="{{ route('poll') }}" class="btn-primary">
                        🗳️ Mulai Voting
                    </a>
                    <a href="{{ route('results') }}" class="btn-secondary">
                        📊 Lihat Hasil
                    </a>
                @endguest
            </div>
        </div>
    </section>

    <!-- Candidates Section -->
    <section class="section" id="candidates">
        <div class="container">
            <div class="section-header">
                <h3>Pasangan Calon Ketua & Wakil Ketua OSIS</h3>
                <p>Kenali pasangan calon yang akan memimpin OSIS untuk 1 tahun ke depan</p>
            </div>
            
            <div class="candidates-grid">
                @php
                    $colors = ['blue', 'red', 'cyan'];
                    $index = 0;
                @endphp
                @foreach($poll->options as $option)
                <div class="candidate-card">
                    <div class="candidate-header {{ $colors[$index % 3] }}">
                        <div class="candidate-number">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</div>
                        <div class="candidate-name">{{ $option->option_text }}</div>
                    </div>
                    <div class="candidate-body">
                        <p class="candidate-label">Pasangan Calon Nomor Urut {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</p>
                    </div>
                </div>
                @php $index++; @endphp
                @endforeach
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="section">
        <div class="container">
            <div class="section-header">
                <h3>Keunggulan Sistem e-OSIS</h3>
                <p>Platform pemilihan yang dirancang dengan standar keamanan dan transparansi tertinggi</p>
            </div>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔒</div>
                    <h4>Aman & Terenkripsi</h4>
                    <p>Sistem keamanan tingkat tinggi untuk melindungi setiap suara pemilih</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">👤</div>
                    <h4>Satu Pemilih, Satu Suara</h4>
                    <p>Jaminan bahwa setiap siswa yang berhak hanya dapat memilih satu kali</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">📈</div>
                    <h4>Hasil Real-Time</h4>
                    <p>Pemantauan hasil pemilihan secara langsung dan transparan</p>
                </div>
                <div class="feature-card">
                    <div class="feature-icon">✓</div>
                    <h4>Kredibel & Akuntabel</h4>
                    <p>Sistem yang dapat dipertanggungjawabkan dan sesuai peraturan OSIS</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Section -->
    <section class="section steps-section">
        <div class="container">
            <div class="section-header">
                <h3>Cara Memberikan Suara</h3>
                <p>Proses pemilihan yang mudah dalam 4 langkah sederhana</p>
            </div>
            
            <div class="steps-grid">
                <div class="step-card">
                    <div class="step-number">1</div>
                    <h4>Registrasi</h4>
                    <p>Daftar dengan data valid sebagai pemilih</p>
                </div>
                <div class="step-card">
                    <div class="step-number">2</div>
                    <h4>Verifikasi</h4>
                    <p>Login menggunakan akun terverifikasi</p>
                </div>
                <div class="step-card">
                    <div class="step-number">3</div>
                    <h4>Pilih</h4>
                    <p>Tentukan pilihan pasangan calon Anda</p>
                </div>
                <div class="step-card">
                    <div class="step-number">4</div>
                    <h4>Hasil</h4>
                    <p>Lihat hasil pemilihan secara real-time</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="cta-content">
            <h3>Siap Menggunakan Hak Pilih Anda?</h3>
            <p>Bergabunglah dengan ribuan siswa yang telah memberikan suaranya</p>
            @guest
                <a href="{{ route('register') }}" class="btn-primary" style="display: inline-block;">
                    📝 Daftar & Mulai Memilih →
                </a>
            @else
                <a href="{{ route('poll') }}" class="btn-primary" style="display: inline-block;">
                    🗳️ Mulai Voting →
                </a>
            @endguest
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <h4>e-OSIS 2024</h4>
                <p>Komisi Pemilihan Umum OSIS</p>
                <p>Sistem pemilihan elektronik resmi untuk Pemilihan Ketua dan Wakil Ketua OSIS SMA Negeri 1 tahun 2024. Aman, transparan, dan akuntabel.</p>
            </div>
            <div class="footer-section">
                <h4>Tautan Cepat</h4>
                <a href="#candidates">Kandidat</a>
                <a href="#features">Keunggulan</a>
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Daftar</a>
            </div>
            <div class="footer-section">
                <h4>Kontak</h4>
                <p>📧 osis@sman1.sch.id</p>
                <p>📱 +62 21 1234 567</p>
                <p>📍 SMA Negeri 1<br>Jakarta Pusat, DKI Jakarta</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2025 Komisi Pemilihan Umum OSIS SMA Negeri 1. Hak Cipta Dilindungi.</p>
        </div>
    </footer>
</body>
</html>
