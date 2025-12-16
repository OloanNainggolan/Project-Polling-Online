<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Polling Online - Sistem Voting dengan Login</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
            overflow-x: hidden;
        }
        
        body::before {
            content: '';
            position: absolute;
            width: 400px;
            height: 400px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -200px;
            right: -200px;
            animation: float 8s ease-in-out infinite;
        }
        
        body::after {
            content: '';
            position: absolute;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -150px;
            left: -150px;
            animation: float 10s ease-in-out infinite reverse;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0) rotate(0deg); }
            50% { transform: translateY(-30px) rotate(10deg); }
        }
        
        .container {
            max-width: 1100px;
            width: 100%;
            position: relative;
            z-index: 1;
        }
        
        .hero-section {
            background: white;
            border-radius: 24px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            animation: fadeInUp 0.6s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            min-height: 600px;
        }
        
        @media (max-width: 768px) {
            .hero-grid {
                grid-template-columns: 1fr;
            }
            .hero-image {
                display: none;
            }
        }
        
        .hero-content {
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        
        .badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 8px 20px;
            border-radius: 30px;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 24px;
            width: fit-content;
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.3);
        }
        
        .badge-dot {
            width: 8px;
            height: 8px;
            background: #10b981;
            border-radius: 50%;
            animation: pulse 2s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.5; transform: scale(1.2); }
        }
        
        h1 {
            font-size: 48px;
            font-weight: 800;
            color: #1f2937;
            margin-bottom: 20px;
            line-height: 1.2;
        }
        
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .subtitle {
            font-size: 18px;
            color: #6b7280;
            margin-bottom: 40px;
            line-height: 1.6;
        }
        
        .features {
            display: grid;
            gap: 16px;
            margin-bottom: 40px;
        }
        
        .feature {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 12px;
            background: #f9fafb;
            border-radius: 12px;
            transition: all 0.3s ease;
        }
        
        .feature:hover {
            background: #f3f4f6;
            transform: translateX(5px);
        }
        
        .feature-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            flex-shrink: 0;
        }
        
        .feature-text {
            font-size: 15px;
            font-weight: 500;
            color: #374151;
        }
        
        .button-group {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
        }
        
        .cta-button {
            flex: 1;
            min-width: 180px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 18px 36px;
            border-radius: 14px;
            font-size: 16px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 25px rgba(102, 126, 234, 0.4);
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 15px 35px rgba(102, 126, 234, 0.5);
        }
        
        .cta-button.secondary {
            background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            box-shadow: 0 10px 25px rgba(240, 147, 251, 0.4);
        }
        
        .cta-button.secondary:hover {
            box-shadow: 0 15px 35px rgba(240, 147, 251, 0.5);
        }
        
        .cta-button svg {
            width: 20px;
            height: 20px;
        }
        
        .hero-image {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        
        .stats-card {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
            max-width: 350px;
            animation: float 6s ease-in-out infinite;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-top: 20px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 32px;
            font-weight: 800;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stat-label {
            font-size: 13px;
            color: #6b7280;
            margin-top: 4px;
            font-weight: 500;
        }
        
        .chart-icon {
            font-size: 80px;
            margin-bottom: 20px;
        }
        
        .footer {
            text-align: center;
            margin-top: 30px;
            color: white;
            font-size: 14px;
            font-weight: 500;
            opacity: 0.9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="hero-section">
            <div class="hero-grid">
                <div class="hero-content">
                    <div class="badge">
                        <span class="badge-dot"></span>
                        <span>Sistem Voting dengan Authentication</span>
                    </div>
                    
                    <h1>
                        Polling Online
                        <span class="gradient-text">Secure</span>
                    </h1>
                    
                    <p class="subtitle">
                        Sistem voting yang aman dengan login! Setiap user hanya bisa vote 1 kali. Data tersimpan di database dengan tracking lengkap.
                    </p>
                    
                    <div class="features">
                        <div class="feature">
                            <div class="feature-icon">🔐</div>
                            <div class="feature-text">Login & Register System</div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">📊</div>
                            <div class="feature-text">Chart.js untuk visualisasi</div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">🗄️</div>
                            <div class="feature-text">Database tracking per user</div>
                        </div>
                        <div class="feature">
                            <div class="feature-icon">✅</div>
                            <div class="feature-text">One vote per user</div>
                        </div>
                    </div>
                    
                    @auth
                        <a href="{{ route('poll') }}" class="cta-button">
                            <span>Mulai Voting Sekarang</span>
                            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                            </svg>
                        </a>
                    @else
                        <div class="button-group">
                            <a href="{{ route('login') }}" class="cta-button">
                                <span>Login</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"/>
                                </svg>
                            </a>
                            <a href="{{ route('register') }}" class="cta-button secondary">
                                <span>Register</span>
                                <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"/>
                                </svg>
                            </a>
                        </div>
                    @endauth
                </div>
                
                <div class="hero-image">
                    <div class="stats-card">
                        <div class="chart-icon">🔐</div>
                        <h3 style="font-size: 20px; font-weight: 700; color: #1f2937; margin-bottom: 5px;">
                            Secure Polling System
                        </h3>
                        <p style="font-size: 13px; color: #6b7280; margin-bottom: 20px;">
                            Login untuk mulai voting
                        </p>
                        <div class="stats-grid">
                            <div class="stat-item">
                                <div class="stat-number">🔒</div>
                                <div class="stat-label">Secure</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1x</div>
                                <div class="stat-label">Per User</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">📊</div>
                                <div class="stat-label">Charts</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">⚡</div>
                                <div class="stat-label">Real-time</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="footer">
            © 2025 Polling Online - Secure Voting System with Authentication
        </div>
    </div>
</body>
</html>
