<?php
require 'config.php';

// يستقبل حرف الاتجاه من لوحة التحكم ويحفظه في جدول directions
$direction = $_POST['direction'] ?? '';
$allowed   = ['f', 'b', 'l', 'r', 's'];

if (!in_array($direction, $allowed, true)) {
    http_response_code(400);
    echo 'invalid direction';
    exit;
}

$stmt = $conn->prepare('INSERT INTO directions (direction) VALUES (?)');
$stmt->bind_param('s', $direction);
echo $stmt->execute() ? 'ok' : 'database error';

$stmt->close();
$conn->close();
