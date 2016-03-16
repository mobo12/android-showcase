<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
            <link rel="stylesheet" href="/style.css">
        <title><?php echo $title; ?></title>
                        </head>
<body>
    <!-- Header begin -->
        <div class="header">
            <span class="logo"><a name="up" id="up"></a><a href="/" title=""><img src="/logo.png" alt="Logo"></a></span>
    </div>
        <!-- Header end -->

<table width="100%"><tr>
<?php
if(!empty($_GET['query'])){
echo '<td style="text-align:center;padding:4px;color:#900;border-bottom:2px solid red;"><a href="/" title="'.$title.'">HOME</a></td>';
}else{
echo '<td style="text-align:center;padding:4px;color:#900;border-bottom:2px solid red;">HOME</td>';
}
?>
<td style="text-align:center;padding:4px;" class="apps"><a href="/category/apps.html">APPS</a></td>
<td style="text-align:center;padding:4px;" class="games"><a href="/category/games.html">GAMES</a></td>
<td style="text-align:center;padding:4px;" class="themes"><a href="/category/themes.html">THEMES</a></td>
</tr></table>
<br/>
    <!-- Search begin -->
                <div class="search">
    <form action="/result.php" method="GET">
              <input type="text" name="query" class="input"onblur="if(this.value=='')this.value=this.defaultValue;" onfocus="if(this.value==this.defaultValue)this.value=''" value="Search..."><input type="submit" value="Search" class="submit">
                       </form>
</div>
        <!-- Search end -->
