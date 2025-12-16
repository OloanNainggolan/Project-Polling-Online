<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pemilihan - e-OSIS 2024</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
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
        
        h2 {
            font-size: 20px;
            font-weight: 700;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 32px;
        }
        
        .stat-card {
            background: white;
            color: #1a202c;
            padding: 36px;
            border-radius: 24px;
            text-align: center;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
            border: 3px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }
        
        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 6px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
        }
        
        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 40px rgba(59, 130, 246, 0.25);
            border-color: #3b82f6;
        }
        
        .stat-number {
            font-size: 52px;
            font-weight: 900;
            margin-bottom: 12px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .stat-label {
            font-size: 15px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #64748b;
        }
        
        .chart-section {
            background: white;
            border-radius: 28px;
            padding: 56px;
            margin-bottom: 32px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 3px solid #e2e8f0;
        }
        
        .chart-header {
            text-align: center;
            margin-bottom: 48px;
            padding-bottom: 24px;
            border-bottom: 3px solid #f1f5f9;
        }
        
        .chart-header h3 {
            font-size: 36px;
            font-weight: 900;
            color: #1a202c;
            margin-bottom: 16px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.05);
        }
        
        .chart-header p {
            font-size: 18px;
            color: #64748b;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        
        .charts-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
            gap: 32px;
            margin: 0 auto;
        }
        
        .chart-item {
            background: linear-gradient(135deg, #f8fafc 0%, #ffffff 100%);
            border-radius: 24px;
            padding: 32px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border: 2px solid #e2e8f0;
            transition: all 0.3s;
        }
        
        .chart-item:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
            border-color: #3b82f6;
        }
        
        .chart-title {
            font-size: 18px;
            font-weight: 800;
            color: #1a202c;
            text-align: center;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 2px solid #e2e8f0;
        }
        
        .details-section {
            background: white;
            border-radius: 28px;
            padding: 48px;
            margin-bottom: 32px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            border: 3px solid #e2e8f0;
        }
        
        .details-section h3 {
            font-size: 28px;
            font-weight: 900;
            color: #1a202c;
            margin-bottom: 32px;
            padding-bottom: 16px;
            border-bottom: 3px solid #f1f5f9;
        }
        
        .result-item {
            background: linear-gradient(135deg, #ffffff 0%, #f8fafc 100%);
            border: 3px solid #e2e8f0;
            border-radius: 20px;
            padding: 28px;
            margin-bottom: 20px;
            transition: all 0.3s;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        
        .result-item:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.2);
            border-color: #3b82f6;
        }
        
        .result-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 16px;
        }
        
        .result-name {
            font-size: 20px;
            font-weight: 800;
            color: #1a202c;
            letter-spacing: 0.3px;
        }
        
        .result-stats {
            display: flex;
            align-items: center;
            gap: 20px;
        }
        
        .vote-count {
            font-size: 24px;
            font-weight: 900;
            color: #3b82f6;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.05);
        }
        
        .vote-percentage {
            padding: 10px 20px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border-radius: 14px;
            font-size: 18px;
            font-weight: 800;
            box-shadow: 0 4px 12px rgba(59, 130, 246, 0.3);
        }
        
        .progress-bar {
            height: 18px;
            background: #e2e8f0;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        
        .progress-fill {
            height: 100%;
            background: linear-gradient(90deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 12px;
            transition: width 1.5s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 2px 8px rgba(59, 130, 246, 0.5);
            position: relative;
        }
        
        .progress-fill::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 50%;
            background: linear-gradient(180deg, rgba(255, 255, 255, 0.3) 0%, transparent 100%);
            border-radius: 12px;
        }
        
        .ranking-section {
            background: white;
            border: 3px solid #fbbf24;
            border-radius: 28px;
            padding: 48px;
            box-shadow: 0 10px 40px rgba(251, 191, 36, 0.2);
            position: relative;
            overflow: hidden;
        }
        
        .ranking-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 8px;
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
        }
        
        .ranking-section h3 {
            font-size: 28px;
            font-weight: 900;
            color: #78350f;
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .rank-item {
            display: flex;
            align-items: center;
            gap: 20px;
            padding: 20px;
            background: white;
            border-radius: 16px;
            margin-bottom: 12px;
            transition: all 0.3s;
        }
        
        .rank-item:hover {
            transform: translateX(8px);
            box-shadow: 0 6px 20px rgba(251, 191, 36, 0.3);
        }
        
        .rank-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border-radius: 14px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            font-weight: 800;
            flex-shrink: 0;
        }
        
        .rank-item:first-child .rank-number {
            background: linear-gradient(135deg, #fbbf24 0%, #f59e0b 100%);
            box-shadow: 0 4px 12px rgba(251, 191, 36, 0.4);
        }
        
        .rank-info {
            flex: 1;
        }
        
        .rank-name {
            font-size: 18px;
            font-weight: 700;
            color: #1a202c;
            margin-bottom: 4px;
        }
        
        .rank-stats {
            font-size: 14px;
            color: #64748b;
            font-weight: 600;
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
            
            .result-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }
            
            .charts-container {
                grid-template-columns: 1fr;
                gap: 24px;
            }
            
            .chart-item {
                padding: 20px;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">📊</div>
                <div class="logo-text">
                    <h1>Hasil Pemilihan</h1>
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
            <div class="icon">📊</div>
            <h1>Hasil Pemilihan Real-Time</h1>
            <h2>{{ $poll->question }}</h2>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-number">{{ $poll->options->sum('votes') }}</div>
                <div class="stat-label">Total Suara</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $poll->options->count() }}</div>
                <div class="stat-label">Pasangan Calon</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">{{ $poll->options->max('votes') }}</div>
                <div class="stat-label">Suara Tertinggi</div>
            </div>
        </div>
        
        <div class="chart-section">
            <div class="chart-header">
                <h3>� Grafik Perolehan Suara</h3>
                <p>Visualisasi distribusi suara secara real-time</p>
            </div>
            <div class="charts-container">
                <div class="chart-item">
                    <h4 class="chart-title">Distribusi Persentase</h4>
                    <canvas id="pieChart"></canvas>
                </div>
                <div class="chart-item">
                    <h4 class="chart-title">Perolehan Suara</h4>
                    <canvas id="barChart"></canvas>
                </div>
            </div>
        </div>
        
        <div class="details-section">
            <h3>📋 Detail Perolehan Suara</h3>
            
            @foreach($poll->options as $option)
                @php
                    $totalVotes = $poll->options->sum('votes');
                    $percentage = $totalVotes > 0 ? round(($option->votes / $totalVotes) * 100, 1) : 0;
                @endphp
                <div class="result-item">
                    <div class="result-header">
                        <div class="result-name">{{ $option->option_text }}</div>
                        <div class="result-stats">
                            <span class="vote-count">{{ $option->votes }} suara</span>
                            <span class="vote-percentage">{{ $percentage }}%</span>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <div class="progress-fill" style="width: {{ $percentage }}%"></div>
                    </div>
                </div>
            @endforeach
        </div>
        
        <div class="ranking-section">
            <h3>
                🏆 Peringkat Teratas
            </h3>
            
            @foreach($poll->options->sortByDesc('votes')->take(3) as $index => $option)
                @php
                    $totalVotes = $poll->options->sum('votes');
                    $percentage = $totalVotes > 0 ? round(($option->votes / $totalVotes) * 100, 1) : 0;
                @endphp
                <div class="rank-item">
                    <div class="rank-number">{{ $index + 1 }}</div>
                    <div class="rank-info">
                        <div class="rank-name">{{ $option->option_text }}</div>
                        <div class="rank-stats">{{ $option->votes }} suara ({{ $percentage }}%)</div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    
    <script>
        const chartData = @json($chartData);
        
        // Professional color palette with gradients
        const colorPalette = [
            {
                bg: 'rgba(99, 102, 241, 0.9)',
                border: '#6366f1',
                gradient: ['#6366f1', '#8b5cf6']
            },
            {
                bg: 'rgba(236, 72, 153, 0.9)',
                border: '#ec4899',
                gradient: ['#ec4899', '#f43f5e']
            },
            {
                bg: 'rgba(245, 158, 11, 0.9)',
                border: '#f59e0b',
                gradient: ['#f59e0b', '#f97316']
            },
            {
                bg: 'rgba(14, 165, 233, 0.9)',
                border: '#0ea5e9',
                gradient: ['#0ea5e9', '#06b6d4']
            },
            {
                bg: 'rgba(34, 197, 94, 0.9)',
                border: '#22c55e',
                gradient: ['#22c55e', '#10b981']
            }
        ];
        
        const backgroundColors = chartData.labels.map((_, i) => colorPalette[i % colorPalette.length].bg);
        const borderColors = chartData.labels.map((_, i) => colorPalette[i % colorPalette.length].border);
        
        // Doughnut Chart (Pie Chart Modern)
        const pieCtx = document.getElementById('pieChart').getContext('2d');
        new Chart(pieCtx, {
            type: 'doughnut',
            data: {
                labels: chartData.labels,
                datasets: [{
                    data: chartData.data,
                    backgroundColor: backgroundColors,
                    borderColor: '#ffffff',
                    borderWidth: 4,
                    hoverOffset: 15
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 1.5,
                animation: {
                    animateRotate: true,
                    animateScale: true,
                    duration: 2000,
                    easing: 'easeInOutQuart'
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom',
                        labels: {
                            font: {
                                size: 13,
                                weight: '700',
                                family: "'Poppins', sans-serif"
                            },
                            padding: 20,
                            usePointStyle: true,
                            pointStyle: 'circle',
                            color: '#1a202c'
                        }
                    },
                    tooltip: {
                        backgroundColor: 'rgba(17, 24, 39, 0.95)',
                        padding: 16,
                        titleFont: {
                            size: 16,
                            weight: 'bold',
                            family: "'Poppins', sans-serif"
                        },
                        bodyFont: {
                            size: 14,
                            weight: '600',
                            family: "'Poppins', sans-serif"
                        },
                        borderColor: '#3b82f6',
                        borderWidth: 2,
                        cornerRadius: 12,
                        displayColors: true,
                        boxWidth: 15,
                        boxHeight: 15,
                        callbacks: {
                            label: function(context) {
                                const label = context.label || '';
                                const value = context.parsed || 0;
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = total > 0 ? ((value / total) * 100).toFixed(1) : 0;
                                return ' ' + label + ': ' + value + ' suara (' + percentage + '%)';
                            }
                        }
                    }
                },
                cutout: '60%'
            }
        });
        
        // Horizontal Bar Chart
        const barCtx = document.getElementById('barChart').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: chartData.labels,
                datasets: [{
                    label: 'Jumlah Suara',
                    data: chartData.data,
                    backgroundColor: backgroundColors,
                    borderColor: borderColors,
                    borderWidth: 3,
                    borderRadius: 12,
                    barPercentage: 0.7
                }]
            },
            options: {
                indexAxis: 'y',
                responsive: true,
                maintainAspectRatio: true,
                aspectRatio: 1.5,
                animation: {
                    duration: 2000,
                    easing: 'easeInOutQuart',
                    delay: 200
                },
                plugins: {
                    legend: {
                        display: false
                    },
                    tooltip: {
                        backgroundColor: 'rgba(17, 24, 39, 0.95)',
                        padding: 16,
                        titleFont: {
                            size: 15,
                            weight: 'bold',
                            family: "'Poppins', sans-serif"
                        },
                        bodyFont: {
                            size: 14,
                            weight: '600',
                            family: "'Poppins', sans-serif"
                        },
                        borderColor: '#3b82f6',
                        borderWidth: 2,
                        cornerRadius: 10,
                        displayColors: true,
                        callbacks: {
                            title: function(context) {
                                return '📊 ' + context[0].label;
                            },
                            label: function(context) {
                                const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                const percentage = total > 0 ? ((context.parsed.x / total) * 100).toFixed(1) : 0;
                                return ' ' + context.parsed.x + ' suara (' + percentage + '%)';
                            }
                        }
                    }
                },
                scales: {
                    x: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1,
                            font: {
                                size: 12,
                                weight: '700',
                                family: "'Poppins', sans-serif"
                            },
                            color: '#475569'
                        },
                        grid: {
                            color: 'rgba(148, 163, 184, 0.15)',
                            lineWidth: 1.5
                        },
                        border: {
                            display: false
                        }
                    },
                    y: {
                        ticks: {
                            font: {
                                size: 13,
                                weight: '700',
                                family: "'Poppins', sans-serif"
                            },
                            color: '#1a202c',
                            padding: 10
                        },
                        grid: {
                            display: false
                        },
                        border: {
                            display: false
                        }
                    }
                }
            }
        });
        
        // Animate progress bars
        window.addEventListener('load', function() {
            const progressFills = document.querySelectorAll('.progress-fill');
            progressFills.forEach(fill => {
                const width = fill.style.width;
                fill.style.width = '0%';
                setTimeout(() => {
                    fill.style.width = width;
                }, 100);
            });
        });
    </script>
</body>
</html>
