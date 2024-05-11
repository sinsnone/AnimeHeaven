<?php
$host = "i5n14z.stackhero-network.com"; // استبدله بالمضيف الصحيح
$username = "root"; // استبدله بالاسم الصحيح للمستخدم
$password = "1ZCxTwjDO4BK77rghOtWTMSfgJWMHbtJ"; // استبدله بكلمة المرور الصحيحة
$database = "animeheaven"; // استبدله بقاعدة البيانات الصحيحة

// خيارات الاتصال الآمن
$ssl_options = array(
    "ssl" => array(
        "key" => "/path/to/client-key.pem",
        "cert" => "/path/to/client-cert.pem",
        "ca" => "/path/to/ca.pem",
        "capath" => "/path/to",
        "cipher" => "AES256-SHA"
    )
);

// إنشاء اتصال بقاعدة البيانات مع استخدام SSL
$conn = new mysqli($host, $username, $password, $database, null, null, $ssl_options);

// التحقق من الاتصال
if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

echo "تم الاتصال بنجاح!";
?>
