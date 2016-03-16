<?php
/*
Script By: Faisal Khan
Web: http://faisalskhan.com
Name: Mobile Apps Android Downloader
Update: 16 Mar 2015
*/

$peli = strtolower($_GET['query']);
if(!empty($peli)){$cuplis='/search/'.str_replace(' ','-',$peli).'.html';
}
else{$cuplis='/';
}
header('location:'.$cuplis.'');
?>
