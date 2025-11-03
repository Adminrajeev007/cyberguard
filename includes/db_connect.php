<?php
$db_url = getenv('postgresql://cyberguard_server_user:z2xnHFcLWyZrFF8sKDwzc43lvFZk961J@dpg-d449a36mcj7s73c0skt0-a/cyberguard_server');

if (!$db_url) {
    die("DATABASE_URL not set in Render environment");
}

$db = parse_url($db_url);

$host = $db['host'];
$port = $db['port'];
$user = $db['user'];
$pass = $db['pass'];
$name = ltrim($db['path'], '/');

try {
    $pdo = new PDO("pgsql:host=$host;port=$port;dbname=$name", $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ]);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>
