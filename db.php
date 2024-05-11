<?php
$host = "i5n14z.stackhero-network.com"; // استبدله بالمضيف الصحيح
$username = "root"; // استبدله بالاسم الصحيح للمستخدم
$password = "1ZCxTwjDO4BK77rghOtWTMSfgJWMHbtJ"; // استبدله بكلمة المرور الصحيحة
$database = "animeheaven"; // استبدله بقاعدة البيانات الصحيحة

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($host, $username, $password, $database);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

echo "تم الاتصال بنجاح!";
?>
