<?php require 'fonksiyonlar.php';GirisKontrol(true); ?>

<?php
	
include 'baglan.php'; // Veritabanı Bağlantısı 
session_start();
$hesapAdi = $_SESSION['giris'];
 $adminKontrol = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$hesapAdi'");
 foreach($adminKontrol as $adminLevel){
	 $adminLeveli = $adminLevel['admin'];
 }
if(isset($_SESSION['giris']))
{ 
  $k_adi = mysqli_real_escape_string($baglanti, $_SESSION['giris']);
  $karakterbul = mysqli_query($baglanti, "SELECT * FROM characters WHERE charactername = '$k_adi'");
  $hesapbul = mysqli_query($baglanti, "SELECT * FROM accounts WHERE username = '$h_adi'");
  //$sorgu = mysqli_num_rows($karakterbul);  
   $kulAdis = $_SESSION['giris'];
			$ipcek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$kulAdis'");
			foreach($ipcek as $ip){
				$ips = $ip['ip'];
			}	
  
  $k_adi = mysqli_real_escape_string($baglanti, $_SESSION['giris']);
  $hesapIDCek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$k_adi'");
foreach($hesapIDCek as $hid){
	$hesapID = $hid['id'];
	$bakiyse = $hid['bakiye'];
}
	
	//email
 $kulAdis = $_SESSION['giris'];
			$emailcek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$kulAdis'");
			foreach($emailcek as $emails){
				$email = $emails['mail'];
			}	
  //email
	
//Serial
 $kulAdis = $_SESSION['giris'];
			$serialcek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$kulAdis'");
			foreach($serialcek as $serial){
				$serials = $serial['mtaserial'];
			}	
  //Serial
  
  //Son Giriş
  
$kulAdis = $_SESSION['giris'];
			$songiriscek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$kulAdis'");
			foreach($songiriscek as $songiriss){
				$songiris = $songiriss['lastlogin'];
			}
  //Son Giriş Son
$adminKontrol = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$hesapAdi'");
 foreach($adminKontrol as $adminLevel){
	 $adminLeveli = $adminLevel['admin'];
 }
 
  while($hesap = mysqli_fetch_assoc($hesapbul))
  {
    $hesapadi = $karakter['charactername'];
    $admin = $admins['admin'];
  
  }




  while($karakter = mysqli_fetch_assoc($karakterbul))
  {
    $karakteradi = $karakter['charactername'];
   
    $cinsiyet = $karakter['gender'];
  }
 
  
  $karakterler = mysqli_query($baglanti, "SELECT COUNT(*) FROM `accounts`");
  $karakter = mysqli_fetch_array($karakterler);
  $araclar = mysqli_query($baglanti, "SELECT COUNT(*) FROM `vehicles`");
  $arac = mysqli_fetch_array($araclar);
  $isyerleri = mysqli_query($baglanti, "SELECT COUNT(*) FROM `factions`");
  $isyeri = mysqli_fetch_array($isyerleri);
  $sikayetler = mysqli_query($baglanti, "SELECT COUNT(*) FROM `characters`");
  $sikayetmoa = mysqli_fetch_array($sikayetler);  

}
else echo "<script> window.location.replace('login.php') </script>";



date_default_timezone_set('Europe/Istanbul');
$tarih = date("Y-m-d H:i:s");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
   

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                       
                        
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                       
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6" style="margin-left:100px!important;">
                                <div class="card">
                                    <div class="card-header">User Control Panel</div>
                                    <div class="card-body">
                                        <div class="card-title">
                                            <h3 class="text-center title-2">Karakterini Seç</h3>
                                        </div>
                                        <hr>
                                        <form action="" method="post" novalidate="novalidate">
                                           
                                            
                                           
                                            <div class="row">
                                               
                                                <div class="col-12">
                                                    <div class="account-dropdown__body" >
                                               <center> <div class="account-dropdown__item" >
                                                   
														<?php
			$karakterCek = mysqli_query($baglanti,"SELECT * from characters WHERE account='$hesapID'");
			foreach($karakterCek as $kbilgi){
			?>
                                                        <center><a href="main.php?id=<?php echo $kbilgi['id'];?>" ><?php echo $kbilgi['charactername']; ?></a> </center>
														<hr>
			<?php } ?>
                                                </div>
                                                </center>
                                               
                                            </div>
													</div>
                                                </div>
                                            </div>
                                            <div>
                                              
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <script src="js/project.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
