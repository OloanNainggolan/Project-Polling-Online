<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Saya - e-OSIS 2024</title>
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
        
        .container {
            max-width: 900px;
            margin: 0 auto;
        }
        
        .profile-header {
            text-align: center;
            margin-bottom: 32px;
            background: white;
            padding: 48px;
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
        
        .avatar {
            width: 120px;
            height: 120px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 56px;
            margin-bottom: 20px;
            box-shadow: 0 12px 32px rgba(59, 130, 246, 0.3);
        }
        
        h1 {
            font-size: 32px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 8px;
        }
        
        .user-email {
            font-size: 16px;
            color: #64748b;
            font-weight: 500;
        }
        
        .section {
            background: white;
            border-radius: 24px;
            padding: 32px;
            margin-bottom: 24px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.08);
        }
        
        .section-title {
            font-size: 20px;
            font-weight: 800;
            color: #1a202c;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .section-icon {
            width: 40px;
            height: 40px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            font-size: 14px;
            font-weight: 700;
            color: #334155;
            margin-bottom: 8px;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 14px 16px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: #1a202c;
            transition: all 0.3s;
            background: #f8fafc;
        }
        
        input:focus {
            outline: none;
            border-color: #3b82f6;
            background: white;
            box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.1);
        }
        
        .input-error {
            font-size: 13px;
            color: #ef4444;
            font-weight: 600;
            margin-top: 6px;
        }
        
        .btn-primary {
            padding: 14px 32px;
            background: linear-gradient(135deg, #3b82f6 0%, #1d4ed8 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(59, 130, 246, 0.3);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(59, 130, 246, 0.4);
        }
        
        .btn-danger {
            padding: 14px 32px;
            background: linear-gradient(135deg, #ef4444 0%, #dc2626 100%);
            color: white;
            border: none;
            border-radius: 12px;
            font-family: 'Poppins', sans-serif;
            font-weight: 800;
            font-size: 15px;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 6px 20px rgba(239, 68, 68, 0.3);
        }
        
        .btn-danger:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 24px rgba(239, 68, 68, 0.4);
        }
        
        .alert {
            padding: 16px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 600;
        }
        
        .alert-success {
            background: linear-gradient(135deg, #d1fae5 0%, #a7f3d0 100%);
            border: 2px solid #10b981;
            color: #065f46;
        }
        
        .danger-zone {
            background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
            border: 2px solid #ef4444;
            border-radius: 24px;
            padding: 32px;
            margin-top: 24px;
        }
        
        .danger-title {
            font-size: 20px;
            font-weight: 800;
            color: #991b1b;
            margin-bottom: 12px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .danger-text {
            font-size: 14px;
            color: #991b1b;
            font-weight: 500;
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .info-card {
            background: linear-gradient(135deg, #dbeafe 0%, #bfdbfe 100%);
            border: 2px solid #3b82f6;
            border-radius: 16px;
            padding: 20px;
            margin-bottom: 20px;
        }
        
        .info-title {
            font-size: 16px;
            font-weight: 800;
            color: #1e40af;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .info-text {
            font-size: 14px;
            color: #1e3a8a;
            font-weight: 500;
            line-height: 1.6;
        }
        
        @media (max-width: 768px) {
            body {
                padding: 16px;
            }
            
            .profile-header {
                padding: 32px 24px;
            }
            
            h1 {
                font-size: 24px;
            }
            
            .header {
                flex-direction: column;
                gap: 16px;
                padding: 20px;
            }
            
            .section {
                padding: 24px;
            }
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="header-content">
            <div class="logo-section">
                <div class="logo">👤</div>
                <div class="logo-text">
                    <h1>Profil Saya</h1>
                    <p>e-OSIS 2024</p>
                </div>
            </div>
            
            <nav class="header-nav">
                <a href="{{ route('welcome') }}" class="nav-link">Home</a>
                <a href="{{ route('rules') }}" class="nav-link">Aturan</a>
                <a href="{{ route('contact') }}" class="nav-link">Kontak</a>
                <a href="{{ route('profile.edit') }}" class="nav-link active">Profil</a>
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
        <div class="profile-header">
            <div class="avatar">👤</div>
            <h1>{{ $user->name }}</h1>
            <p class="user-email">{{ $user->email }}</p>
        </div>
        
        @if (session('status') === 'profile-updated')
            <div class="alert alert-success">
                ✓ Profil berhasil diperbarui!
            </div>
        @endif
        
        <div class="section">
            <div class="section-title">
                <div class="section-icon">📝</div>
                Informasi Profil
            </div>
            
            <form method="post" action="{{ route('profile.update') }}">
                @csrf
                @method('patch')
                
                <div class="form-group">
                    <label for="name">Nama Lengkap</label>
                    <input type="text" id="name" name="name" value="{{ old('name', $user->name) }}" required autofocus>
                    @if ($errors->get('name'))
                        <div class="input-error">{{ $errors->get('name')[0] }}</div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="email">Alamat Email</label>
                    <input type="email" id="email" name="email" value="{{ old('email', $user->email) }}" required>
                    @if ($errors->get('email'))
                        <div class="input-error">{{ $errors->get('email')[0] }}</div>
                    @endif
                </div>
                
                <button type="submit" class="btn-primary">Simpan Perubahan</button>
            </form>
        </div>
        
        <div class="section">
            <div class="section-title">
                <div class="section-icon">🔒</div>
                Ubah Password
            </div>
            
            <div class="info-card">
                <div class="info-title">
                    💡 Tips Keamanan
                </div>
                <p class="info-text">
                    Pastikan password Anda minimal 8 karakter dan gunakan kombinasi huruf, angka, dan simbol untuk keamanan maksimal.
                </p>
            </div>
            
            <form method="post" action="{{ route('password.update') }}">
                @csrf
                @method('put')
                
                <div class="form-group">
                    <label for="current_password">Password Saat Ini</label>
                    <input type="password" id="current_password" name="current_password" required>
                    @if ($errors->updatePassword->get('current_password'))
                        <div class="input-error">{{ $errors->updatePassword->get('current_password')[0] }}</div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="password">Password Baru</label>
                    <input type="password" id="password" name="password" required>
                    @if ($errors->updatePassword->get('password'))
                        <div class="input-error">{{ $errors->updatePassword->get('password')[0] }}</div>
                    @endif
                </div>
                
                <div class="form-group">
                    <label for="password_confirmation">Konfirmasi Password Baru</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" required>
                    @if ($errors->updatePassword->get('password_confirmation'))
                        <div class="input-error">{{ $errors->updatePassword->get('password_confirmation')[0] }}</div>
                    @endif
                </div>
                
                <button type="submit" class="btn-primary">Update Password</button>
            </form>
        </div>
        
        <div class="danger-zone">
            <div class="danger-title">
                ⚠️ Zona Berbahaya
            </div>
            <p class="danger-text">
                Setelah akun Anda dihapus, semua data dan informasi akan dihapus secara permanen. 
                Sebelum menghapus akun, pastikan untuk mengunduh data yang ingin Anda simpan.
            </p>
            
            <form method="post" action="{{ route('profile.destroy') }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus akun? Tindakan ini tidak dapat dibatalkan!');">
                @csrf
                @method('delete')
                
                <div class="form-group">
                    <label for="password_delete">Konfirmasi dengan Password Anda</label>
                    <input type="password" id="password_delete" name="password" placeholder="Masukkan password untuk konfirmasi" required>
                    @if ($errors->userDeletion->get('password'))
                        <div class="input-error">{{ $errors->userDeletion->get('password')[0] }}</div>
                    @endif
                </div>
                
                <button type="submit" class="btn-danger">Hapus Akun Permanen</button>
            </form>
        </div>
    </div>
</body>
</html>
