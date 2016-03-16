<?php
/*
Script By: Faisal Khan
Web: http://faisalskhan.com
Name: Mobile Apps Android Downloader
Update: 16 Mar 2015
*/

include 'func.php';

$judul =str_replace('-',' ',$_GET['title']);
$title =''.$judul.' for Android Free Download - 9Apps';
include 'head.php';
$grab =  ngecuplis('http://www.9apps.com/android-'.$_GET['item'].'/'.$_GET['title'].'/');
$view = explode('<section class="content">', $grab);
$tampilan = explode('<div class="scroll-bar"></div>', $view[1]);
$lihat =$tampilan[0];
$lihat =str_replace('src="/asset/v2/images/default_app.png" ','',$lihat);
$lihat =str_replace('dataimg','src',$lihat);
$lihat =str_replace('<div class="main-info">','<div class="list-app">',$lihat);
$lihat =str_replace('<div class="pic">','<table width="100%"><tr><td valign="top" style="text-align:left;" width="54px">',$lihat);
$lihat =str_replace('</div>','',$lihat);
$lihat =str_replace('<div class="text">','',$lihat);
$lihat =str_replace('<p class="name">','</td><td valign="top" style="text-align:left;"><h2 class="title">',$lihat);
$lihat =str_replace('<p>','',$lihat);
$lihat =str_replace('</p>','',$lihat);
$lihat =str_replace('<div class="mid">','</h2>',$lihat);
$lihat =str_replace('<span class="star-small s','<img style="width:70px;height:15px;" src="/img/',$lihat);
$lihat =str_replace('"></span>','.png" alt="">',$lihat);
$lihat =str_replace('<span>(','<i>(',$lihat);
$lihat =str_replace(')</span>',')</i>',$lihat);
$lihat =str_replace('<p class="other">','<br/>',$lihat);
$lihat =str_replace('<!-- Have tow buttons -->','',$lihat);
$lihat =str_replace('<div class="aside">','',$lihat);
$lihat =str_replace('class="btn btn-fast-download j-press"','style="display:none;"',$lihat);
$lihat =str_replace('btn btn-download j-press','down',$lihat);
$lihat =str_replace('Download</a>','Download</a></td></tr></table></div>',$lihat);
$lihat =str_replace('class="lazy"','class="thumb"',$lihat);
$lihat =str_replace('href="/jump/','href="http://www.9apps.com/jump/',$lihat);
$lihat =str_replace('btn btn-download-active j-press','down',$lihat);
$lihat =str_replace('-1/">','.html">',$lihat);
$lihat =str_replace('href="/android-apps/top-','href="/search/',$lihat);

//Info Detail
$info = explode('<div class="panel panel-info">', $grab);
$look = explode('</div>', $info[1]);
$details =$look[0];
$details =str_replace('<h1 class="panel-title">Information</h1>','',$details);
$details =str_replace('<div class="panel-bd">','',$details);
$details =str_replace('<p>','',$details);
$details =str_replace('</p>','<br/>',$details);


//Dari Screenshot
$lihat =str_replace('<div id="scroll" class="screenshot">','',$lihat);
$lihat =str_replace('src="/asset/v2/images/default_130x195.png"','class="shoot"',$lihat);
$lihat =str_replace('<ul>','<div class="info-title">Details File</div><div class="info-detail">'.$details.'</div><div class="gallerycontainer">',$lihat);
$lihat =str_replace('</ul>','<a class="thumbnail" href="http://'.$_SERVER['HTTP_HOST'].'"></div>',$lihat);
$lihat =str_replace('<li>','<a class="thumbnail" href="http://'.$_SERVER['HTTP_HOST'].'/download/'.$_GET['item'].'/'.$_GET['title'].'.html">',$lihat);
$lihat =str_replace('</li>','</a>',$lihat);
$lihat =str_replace('<a style="display:none;"','</td><td valign="center" style="text-align:right;"><a style="display:none;"',$lihat);
$lihat =str_replace('Fast Download</a></td></tr></table></div>','Fast Download</a>',$lihat);
$lihat =str_replace('','',$lihat);

//Gawe Recent App
$view1 = explode('<ul class="reco-list">', $grab);
$tampilan1 = explode('</ul>', $view1[1]);
$recent =$tampilan1[0];
$recent =str_replace('dataimg','src',$recent);
$recent =str_replace('lazy','thumb-recent',$recent);
$recent =str_replace('<p class="name">','<h1 class="title">',$recent);
$recent =str_replace('</p>','</h1>',$recent);
$recent =str_replace('<li class="item">','<div class="recent-list">',$recent);
$recent =str_replace('</li>','</div>',$recent);
$recent =str_replace(' class="inner"','',$recent);
$recent =str_replace('/" onclick','.html" onclick',$recent);
$recent =str_replace('href="/android-','href="/download/',$recent);

echo '<div class="menu-content">';
echo '<div class="info-title">Download '.$judul.'</div>';
echo $lihat;

echo '<div class="info-title">All Browser Apps</div>';
echo $recent;
echo '</div>';
include 'foot.php';
?>