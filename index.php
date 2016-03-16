<?php
/*
Script By: Faisal Khan
Web: http://faisalskhan.com
Name: Mobile Apps Android Downloader
Update: 16 Mar 2015
*/

include 'func.php';

$search =$_GET['query'];
$search1 =str_replace(' ','-',$search);
$search2 = strtolower($search1);
$result =str_replace('_',' ',$search1);
$result1 =ucwords($result);

//Search
if(!empty($search2)){
$cari =$search2;
}else {
$cari ='music';
}

//Paging
if(!empty($_GET['page'])){
$pg =$_GET['page'];
}else {
$pg ='1';
}

if(!empty($search2)){
$title ='Search result for '.$result1.' - 9Apps';
}else{
$title ='Free Android Apps Download | Best Apps for Android Mobile Phone - 9Apps';
}
include 'head.php';
//Result
if(!empty($search2)){
echo '<div class="result">Search results "<b>'.$result1.'</b>"</div>';
}

$grab =  ngecuplis('http://www.9apps.com/search/tag-'.$cari.'-'.$pg.'/');
$ambil = explode('<ul class="list">', $grab);
$tampil = explode('<footer class="footer">', $ambil[1]);
$app =$tampil[0];
$app =str_replace(' class="item"','',$app);
$app =str_replace('class="inner j-press" ','',$app);
$app =str_replace('class="lazy" dataimg="','class="thumb" src="',$app);
$app =str_replace('<div class="pic">','',$app);
$app =str_replace('</div>','',$app);
$app =str_replace('<div class="info">','',$app);
$app =str_replace('<p class="name">','<h1 class="title">',$app);
$app =str_replace('<div class="mid">','</h1>',$app);
$app =str_replace('<p class="other">','<br/>',$app);
$app =str_replace('</p>','',$app);
$app =str_replace('<span class="star-small s','<img style="width:70px;height:15px;" src="/img/',$app);
$app =str_replace('"></span>','.png" alt="">',$app);
$app =str_replace('<span class="type">','',$app);
$app =str_replace('<span class="sp">',' ',$app);
$app =str_replace('<span class="size">','',$app);
$app =str_replace(')</span>',')</i>',$app);
$app =str_replace('</span>','',$app);
$app =str_replace('<span>','<i>',$app);
$app =str_replace('<li>','<div class="list-app"><table width="100%"><tr><td valign="top" style="text-align:left;" width="54px">',$app);
$app =str_replace('</li>','</td></tr></table></div>',$app);
$app =str_replace('class="btn-download j-press"','style="display:none;"',$app);
$app =str_replace('<span class="badge badge-hot">HOT','',$app);
$app =str_replace('<div class=" mid">','</h1>',$app);
$app =str_replace('<span class="star">','<img style="width:70px;height:15px;" src="/img/0.png" alt="">',$app);
$app =str_replace('</ul>','',$app);
$app =str_replace('<!-- List end -->','',$app);
$app =str_replace('</section>','',$app);
$app =str_replace('<div class="num">','',$app);
$app =str_replace('<!-- Footer begin -->','</td></tr></table></div>',$app);
$app =str_replace('<i></i>','',$app);
$app =str_replace('src="/asset/v2/images/default_app.png" ','',$app);
$app =str_replace('</a>','',$app);
$app =str_replace('Next','Next</a>',$app);
$app =str_replace('Prev','Prev</a>',$app);
$app =str_replace('<img class','Download</a><img class',$app);
$app =str_replace('/" onclick','.html" class="down" onclick',$app);
$app =str_replace('/search/tag-','/page/',$app);
$app =str_replace('/">','.html">',$app);
$app =str_replace('<div class="pages">','<div class="pages"><table width="100%"><tr><td style="text-align:left;" width="30px">',$app);
$app =str_replace('Prev</a>','Prev</a></td><td style="text-align:center;" width="30px">',$app);
$app =str_replace('<a class="next','</td><td style="text-align:right;" width="30px"><a class="next',$app);
$app =str_replace('href="/android-','href="/download/',$app);

echo '<div class="menu-content">';
if(!empty($app)){
echo $app;
}else{
echo '<div class="erorr">Sorry file'.$result1.' note found</div>';
echo '</div>';
}
include 'foot.php';
?>