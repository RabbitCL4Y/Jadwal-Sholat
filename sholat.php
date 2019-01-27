<?php
include "Aink.php";
echo "Masukan Kota anda : ";
$kota = trim(fgets(STDIN));
$url = file_get_contents("https://time.siswadi.com/pray/$kota");
$url1 = explode("<br>", $url);
foreach ($url1 as $key){
$js = json_decode($key, true);
print_r($js);
}
?>
