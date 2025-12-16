#!/usr/bin/env php
<?php
/**
 * ERROR CHECKER SCRIPT
 * Script untuk check semua komponen aplikasi
 */

echo "═══════════════════════════════════════════════════\n";
echo "  🔍 POLLING SYSTEM - ERROR CHECKER\n";
echo "═══════════════════════════════════════════════════\n\n";

$errors = [];
$warnings = [];

// 1. Check PHP Version
echo "1. Checking PHP Version...\n";
if (version_compare(PHP_VERSION, '8.2.0', '<')) {
    $errors[] = "PHP version must be >= 8.2.0. Current: " . PHP_VERSION;
} else {
    echo "   ✓ PHP Version: " . PHP_VERSION . "\n";
}

// 2. Check Laravel Installation
echo "\n2. Checking Laravel...\n";
if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
    $errors[] = "Vendor directory not found. Run: composer install";
} else {
    echo "   ✓ Vendor directory exists\n";
}

// 3. Check .env file
echo "\n3. Checking Environment...\n";
if (!file_exists(__DIR__ . '/.env')) {
    $errors[] = ".env file not found. Copy from .env.example";
} else {
    echo "   ✓ .env file exists\n";
}

// 4. Check Database Connection
echo "\n4. Checking Database...\n";
$env = file_get_contents(__DIR__ . '/.env');
preg_match('/DB_DATABASE=(.+)/', $env, $matches);
$dbName = $matches[1] ?? 'Not set';
echo "   Database: {$dbName}\n";

// 5. Check Required Files
echo "\n5. Checking Required Files...\n";
$requiredFiles = [
    'app/Http/Controllers/PollController.php' => 'Poll Controller',
    'app/Models/Vote.php' => 'Vote Model',
    'app/Models/Poll.php' => 'Poll Model',
    'app/Models/Option.php' => 'Option Model',
    'routes/web.php' => 'Web Routes',
    'resources/views/welcome.blade.php' => 'Welcome View',
    'resources/views/poll.blade.php' => 'Poll View',
    'resources/views/results.blade.php' => 'Results View',
];

foreach ($requiredFiles as $file => $name) {
    if (!file_exists(__DIR__ . '/' . $file)) {
        $errors[] = "{$name} not found: {$file}";
    } else {
        echo "   ✓ {$name}\n";
    }
}

// 6. Check Migrations
echo "\n6. Checking Migrations...\n";
$migrations = [
    'create_users_table.php',
    'create_polls_table.php',
    'create_options_table.php',
    'create_votes_table.php',
];

$migrationDir = __DIR__ . '/database/migrations';
foreach ($migrations as $migration) {
    $found = false;
    foreach (scandir($migrationDir) as $file) {
        if (strpos($file, $migration) !== false) {
            $found = true;
            echo "   ✓ {$migration}\n";
            break;
        }
    }
    if (!$found) {
        $warnings[] = "Migration not found: {$migration}";
    }
}

// 7. Check Routes
echo "\n7. Checking Routes Configuration...\n";
$webRoutes = file_get_contents(__DIR__ . '/routes/web.php');
$requiredRoutes = [
    "route('poll')" => 'Poll route',
    "route('vote')" => 'Vote route',
    "route('results')" => 'Results route',
    "middleware(['auth'" => 'Auth middleware',
];

foreach ($requiredRoutes as $search => $name) {
    if (strpos($webRoutes, $search) !== false) {
        echo "   ✓ {$name} configured\n";
    } else {
        $warnings[] = "{$name} not configured properly";
    }
}

// 8. Check Views
echo "\n8. Checking Blade Views...\n";
$viewChecks = [
    'resources/views/poll.blade.php' => ['@auth', '@csrf', 'route(\'vote\')'],
    'resources/views/results.blade.php' => ['Chart.js', '@auth', 'chartData'],
    'resources/views/welcome.blade.php' => ['route(\'login\')', 'route(\'register\')'],
];

foreach ($viewChecks as $view => $checks) {
    if (file_exists(__DIR__ . '/' . $view)) {
        $content = file_get_contents(__DIR__ . '/' . $view);
        foreach ($checks as $check) {
            if (strpos($content, $check) === false) {
                $warnings[] = "Missing '{$check}' in {$view}";
            }
        }
        echo "   ✓ " . basename($view) . "\n";
    }
}

// 9. Check Node Modules
echo "\n9. Checking Node Dependencies...\n";
if (!file_exists(__DIR__ . '/node_modules')) {
    $warnings[] = "node_modules not found. Run: npm install";
} else {
    echo "   ✓ node_modules exists\n";
}

// 10. Check Public Assets
echo "\n10. Checking Public Assets...\n";
if (!file_exists(__DIR__ . '/public/build')) {
    $warnings[] = "Build assets not found. Run: npm run build";
} else {
    echo "   ✓ Build assets exist\n";
}

// Final Report
echo "\n═══════════════════════════════════════════════════\n";
echo "  📊 SUMMARY\n";
echo "═══════════════════════════════════════════════════\n\n";

if (count($errors) === 0 && count($warnings) === 0) {
    echo "✅ ALL CHECKS PASSED!\n";
    echo "   No errors or warnings found.\n";
    echo "   Application is ready to use.\n\n";
    echo "🚀 Start server: php artisan serve\n";
    echo "🌐 Access: http://127.0.0.1:8000\n";
} else {
    if (count($errors) > 0) {
        echo "❌ ERRORS FOUND (" . count($errors) . "):\n";
        foreach ($errors as $i => $error) {
            echo "   " . ($i + 1) . ". {$error}\n";
        }
        echo "\n";
    }
    
    if (count($warnings) > 0) {
        echo "⚠️  WARNINGS (" . count($warnings) . "):\n";
        foreach ($warnings as $i => $warning) {
            echo "   " . ($i + 1) . ". {$warning}\n";
        }
        echo "\n";
    }
    
    echo "🔧 Fix the errors above before running the application.\n";
}

echo "\n═══════════════════════════════════════════════════\n";
exit(count($errors) > 0 ? 1 : 0);
