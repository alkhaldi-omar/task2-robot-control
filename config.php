<?php
// إعدادات الاتصال بقاعدة البيانات (الإعدادات الافتراضية في XAMPP)
$host     = getenv('DB_HOST') ?: 'localhost';
$user     = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASS') ?: '';
$database = 'robot_db';

// نجعل mysqli يرمي استثناء عند أي خطأ (في جميع إصدارات PHP) ونلتقطه بـ try/catch
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
try {
    $conn = new mysqli($host, $user, $password, $database);
} catch (mysqli_sql_exception $e) {
    die('فشل الاتصال بقاعدة البيانات: ' . $e->getMessage());
}

$conn->set_charset('utf8mb4');
