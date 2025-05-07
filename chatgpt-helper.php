
<?php
// تست CURL برای بررسی اتصال هاست به OpenAI

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.openai.com");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
$error = curl_error($ch);
$httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($error) {
    echo "❌ CURL Error: " . $error;
} else {
    echo "✅ اتصال برقرار شد!<br>";
    echo "HTTP Status: " . $httpcode . "<br>";
    echo "پاسخ دریافتی:<br><br>";
    echo htmlentities($response);
}
?>
