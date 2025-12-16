<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $poll->question }} - e-OSIS 2024</title>
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
            max-width: 900px;
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
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 24px;
            padding: 48px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
        
        .page-header {
            text-align: center;
            margin-bottom: 48px;
        }
        
        .icon {
            width: 90px;
            height: 90px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 22px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 48px;
            margin-bottom: 24px;
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.3);
        }
        
        .page-header h2 {
            font-size: 32px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 12px;
            line-height: 1.3;
        }
        
        .subtitle {
            font-size: 16px;
            color: #64748b;
            font-weight: 500;
        }
        
        .already-voted {
            text-align: center;
            padding: 40px;
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border-radius: 20px;
            border: 2px solid #3b82f6;
            margin-bottom: 32px;
        }
        
        .already-voted-icon {
            font-size: 72px;
            margin-bottom: 20px;
            animation: checkmark 0.8s ease-in-out;
        }
        
        @keyframes checkmark {
            0%, 50% { transform: scale(0) rotate(0deg); }
            100% { transform: scale(1) rotate(360deg); }
        }
        
        .already-voted h3 {
            color: #1e40af;
            font-size: 28px;
            font-weight: 800;
            margin-bottom: 12px;
        }
        
        .already-voted p {
            color: #1e3a8a;
            font-size: 16px;
            font-weight: 600;
        }
        
        .results-btn {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            padding: 16px 32px;
            background: linear-gradient(135deg, #10b981 0%, #059669 100%);
            color: white;
            text-decoration: none;
            border-radius: 14px;
            font-weight: 700;
            font-size: 16px;
            transition: all 0.3s;
            box-shadow: 0 8px 24px rgba(16, 185, 129, 0.3);
            margin-top: 24px;
        }
        
        .results-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(16, 185, 129, 0.4);
        }
        
        .candidates-grid {
            display: grid;
            gap: 20px;
            margin-bottom: 32px;
        }
        
        .candidate-option {
            background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
            border: 3px solid #e2e8f0;
            border-radius: 18px;
            padding: 24px;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            gap: 24px;
        }
        
        .candidate-option:hover {
            border-color: #3b82f6;
            transform: translateX(8px);
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.15);
        }
        
        .candidate-option input[type="radio"] {
            width: 24px;
            height: 24px;
            cursor: pointer;
            accent-color: #3b82f6;
        }
        
        .candidate-number {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: 800;
            flex-shrink: 0;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        
        .candidate-info {
            flex: 1;
        }
        
        .candidate-name {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 4px;
        }
        
        .candidate-label {
            font-size: 14px;
            color: #64748b;
            font-weight: 600;
        }
        
        .candidate-option:has(input:checked) {
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-color: #1d4ed8;
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.4);
        }
        
        .candidate-option:has(input:checked) .candidate-name,
        .candidate-option:has(input:checked) .candidate-label {
            color: white;
        }
        
        .candidate-option:has(input:checked) .candidate-number {
            background: white;
            color: #3b82f6;
        }
        
        .submit-btn {
            width: 100%;
            padding: 20px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border: none;
            border-radius: 16px;
            font-size: 18px;
            font-weight: 800;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.35);
            font-family: 'Poppins', sans-serif;
        }
        
        .submit-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.45);
        }
        
        @media (max-width: 768px) {
            body {
                padding: 16px;
            }
            
            .container {
                padding: 32px 24px;
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
            
            .page-header h2 {
                font-size: 24px;
            }
            
            .candidate-option {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">🗳️</div>
                <div class="logo-text">
                    <h1>Voting</h1>
                    <p>e-OSIS 2024</p>
                </div>
            </div>
            
            <nav class="header-nav">
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
            </nav>
        </div>
    </header>
    
    <div class="container">
        <div class="page-header">
            <div class="icon">🗳️</div>
            <h2>{{ $poll->question }}</h2>
            <p class="subtitle">Pilih salah satu pasangan calon di bawah ini</p>
        </div>
        
        @if($hasVoted)
            <div class="already-voted">
                <div class="already-voted-icon">✓</div>
                <h3>Terima Kasih Atas Partisipasinya!</h3>
                <p>Anda sudah memberikan suara dalam pemilihan ini</p>
                <a href="{{ route('results') }}" class="results-btn">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                    Lihat Hasil Pemilihan
                </a>
            </div>
        @else
            <form method="POST" action="{{ route('vote') }}">
                @csrf
                <div class="candidates-grid">
                    @php $index = 1; @endphp
                    @foreach($poll->options as $option)
                        <label class="candidate-option">
                            <input type="radio" name="option_id" value="{{ $option->id }}" id="option{{ $option->id }}" required>
                            <div class="candidate-number">{{ str_pad($index, 2, '0', STR_PAD_LEFT) }}</div>
                            <div class="candidate-info">
                                <div class="candidate-name">{{ $option->option_text }}</div>
                                <div class="candidate-label">Pasangan Calon Nomor Urut {{ str_pad($index, 2, '0', STR_PAD_LEFT) }}</div>
                            </div>
                        </label>
                        @php $index++; @endphp
                    @endforeach
                </div>
                
                <button type="submit" class="submit-btn">
                    ✓ Kirim Suara Saya
                </button>
            </form>
        @endif
    </div>
</body>
</html>
