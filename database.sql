-- إنشاء قاعدة البيانات والجدول الخاص بلوحة تحكم الروبوت
CREATE DATABASE IF NOT EXISTS robot_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE robot_db;

-- كل ضغطة زر تُحفظ كسجل جديد: f = forward, b = backward, l = left, r = right, s = stop
CREATE TABLE IF NOT EXISTS directions (
    id         INT AUTO_INCREMENT PRIMARY KEY,
    direction  CHAR(1) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
