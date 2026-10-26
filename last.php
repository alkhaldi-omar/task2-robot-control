<?php
require 'config.php';

// جلب آخر قيمة مخزنة في الجدول وطباعتها فقط (حرف واحد)
// هذه الصفحة يمكن أن يقرأها الروبوت (مثل ESP32) ليعرف الأمر الحالي
$result = $conn->query('SELECT direction FROM directions ORDER BY id DESC LIMIT 1');
$row    = $result->fetch_assoc();

header('Content-Type: text/plain; charset=utf-8');
echo $row ? $row['direction'] : 's';

$conn->close();
