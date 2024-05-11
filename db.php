<?php
$host = "lt80glfe2gj8p5n2.chr7pe7iynqr.eu-west-1.rds.amazonaws.com"; // استبدله بالمضيف الصحيح
$username = "z7zk7ye6mh6z6z66"; // استبدله بالاسم الصحيح للمستخدم
$password = "scxrpluon9bsrpjg"; // استبدله بكلمة المرور الصحيحة
$database = "animeheaven"; // استبدله بقاعدة البيانات الصحيحة

// إنشاء اتصال بقاعدة البيانات
$conn = new mysqli($host, $username, $password, $database);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

echo "تم الاتصال بنجاح!";
?>
