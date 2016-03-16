<?php
/*
Script By: Faisal Khan
Web: http://faisalskhan.com
Name: Mobile Apps Android Downloader
Update: 16 Mar 2015
*/

error_reporting(0);
function ngecuplis($url){
     // initialising CURL
     $data = curl_init();
     // setting CURL
     curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
     curl_setopt($data, CURLOPT_URL, $url);
     // menjalankan CURL untuk membaca isi file
     $hasil = curl_exec($data);
     curl_close($data);
     return $hasil;
}

function cuplas($txt) {
$txt = preg_replace("/[^a-zA-Z0-9]/", " ", trim(strtolower($txt)));
$txt = ucwords(str_replace("  "," ",$txt));
return $txt;
}
function cuplis($txt) {
$txt = preg_replace("/[^a-zA-Z0-9_]/", "_", trim(strtolower($txt)));
$txt = str_replace("___","_",$txt);
return $txt;
}
$g = explode(',','nk,w,m,pa,l,:/,ht');

function cemplis($txt) {
$txt = preg_replace("/[^a-zA-Z0-9-]/", "-", trim(strtolower($txt)));
return $txt;
}

?>
