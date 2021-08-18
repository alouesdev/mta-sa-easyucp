<?php
setcookie('cross-site-cookie', 'bar', ['samesite' => 'None', 'secure' => true]);
$hostadresi = "127.0.0.1";
$kullaniciadi = "root";
$sifre = "";
$veritabani = "";
$baglanti = mysqli_connect($hostadresi,$kullaniciadi,$sifre,$veritabani);
if (mysqli_connect_errno())
{
echo "Mysql baglantisi basarisiz: " . mysqli_connect_error();
}

error_reporting(0);
/*$panelhostadresi = "localhost";
$panelkullaniciadi = "root";
$panelsifre = "09121981as";
$panelveritabani = "ucp";
$panelbaglanti = mysqli_connect($panelhostadresi,$panelkullaniciadi,$panelsifre,$panelveritabani);
if (mysqli_connect_errno())
{
echo "Mysql baglantisi basarisiz: " . mysqli_connect_error();
}
?>*/
