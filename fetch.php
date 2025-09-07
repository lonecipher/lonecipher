<?php
// fetch.php?url=https://haxor.my.id/p1
$url = $_GET['url'] ?? '';
if ($url) {
    header("Access-Control-Allow-Origin: *");
    // gunakan CURL untuk handling website yang mungkin blocking
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)');
    $response = curl_exec($ch);
    curl_close($ch);
    echo $response;
}
?>
