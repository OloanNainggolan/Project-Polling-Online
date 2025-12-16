@echo off
echo ============================================
echo  Installing Laravel Breeze Authentication
echo ============================================
echo.

echo [1/6] Installing Laravel Breeze...
call composer require laravel/breeze --dev

echo.
echo [2/6] Installing Breeze Blade Stack...
echo Choose PHPUnit when asked for testing framework
echo Choose No when asked to initialize Git
call php artisan breeze:install blade

echo.
echo [3/6] Installing NPM dependencies...
call npm install

echo.
echo [4/6] Building assets...
call npm run build

echo.
echo [5/6] Running migrations...
call php artisan migrate

echo.
echo [6/6] Seeding database with poll data...
call php artisan db:seed --class=PollSeeder

echo.
echo ============================================
echo  Installation Complete!
echo ============================================
echo.
echo Next steps:
echo 1. Run: php artisan serve
echo 2. Open: http://localhost:8000
echo 3. Click Register to create account
echo 4. Start voting!
echo.
pause
