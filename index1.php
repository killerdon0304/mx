<?php
$url = $_GET['c'];
if ($url != "") {
    $uid = str_replace('https://www.mxplayer.in/', '/', $url);
    $murl = file_get_contents("https://seo.mxplay.com/v1/api/seo/get-url-details?url=$uid");

    $mx = json_decode($murl, true);
    $id = $mx['data']['id'];
    $type = $mx['data']['type'];

    $mxurl = file_get_contents("https://api.mxplay.com/v1/web/detail/video?type=$type&id=$id&platform=com.mxplay.desktop&device-density=2&userid=30bb09af-733a-413b-b8b7-b10348ec2b3d&content-languages=hi,mr,pa,bn,en,ml,kn,gu,te,ta");

    $mxdata = json_decode($mxurl, true);
    $hls = $mxdata['stream']['hls']['high'];
    $dash = $mxdata['stream']['dash']['high'];
    $hurl = "https://llvod.mxplay.com/" . $hls;
    $durl = "https://llvod.mxplay.com/" . $dash;
    
     echo $hurl;
     echo $durl;
    
}else{
    echo "<h2>zxymovies.in</h2><br>";
    echo "http://localhost/MXPlayer-API-main/index1.php/?c=
    ";
}
?>
