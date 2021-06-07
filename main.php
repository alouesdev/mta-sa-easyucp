<?php require 'fonksiyonlar.php';GirisKontrol(true); ?>
<!-- Aloues Yaptı Bebeğim  --!>
<?php
	
	
	include 'baglan.php';
session_start();
$hesapAdi = $_SESSION['giris'];
 $adminKontrol = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$hesapAdi'");
 foreach($adminKontrol as $adminLevel){
	 $adminLeveli = $adminLevel['admin'];
 }
if(isset($_SESSION['giris']))
{ 

  $karakterid = $_GET['id'];
  
  $k_adi = mysqli_real_escape_string($baglanti, $_SESSION['giris']);
  $hesapIDCek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$k_adi'");
foreach($hesapIDCek as $hid){
	$hesapID = $hid['id'];
	$bakiyse = $hid['bakiye'];
}
$karakterHesapIDCek = mysqli_query($baglanti,"SELECT * from characters where id='$karakterid'");
foreach($karakterHesapIDCek as $ksp){
	$karakterSahipID = $ksp['account'];

}
  $karakterbul = mysqli_query($baglanti, "SELECT * FROM characters WHERE id = '$karakterid' and account='$hesapID'");
 //Telefon
  $telefonbul = mysqli_query($baglanti, "SELECT * FROM phones WHERE boughtby = '$karakterid'");
    while($phones = mysqli_fetch_assoc($telefonbul))
    {
        $telno = $phones['phonenumber'];
    }
	//

 

 $kulAdis = $_SESSION['giris'];
			$ipcek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$kulAdis'");
			foreach($ipcek as $ip){
				$ips = $ip['ip'];
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
  
  ///$sorgu = mysqli_num_rows($karakterbul);  
   $karakterSay = mysqli_num_rows($karakterbul);
   
   
   
   
   if(!$hesapID == $karakterSahipID){
	   header("Location: main.php");
   }
  

  
  while($karakter = mysqli_fetch_assoc($karakterbul))
  {
    $karakteradi = $karakter['charactername'];
    $can = $karakter['health'];
    $zirh = $karakter['armor'];
    $aclik = $karakter['hunger'];
    $skin = $karakter['skin'];
    $para = $karakter['money'];
    $yas = $karakter['age'];
    $dogumyeri = $karakter['lastarea'];
    $boy = $karakter['height'];
    $kilo = $karakter['weight'];
    $level = $karakter['level'];
    $oynamasaati = $karakter['hoursplayed'];
    $sonip = $karakter['creationdate'];
    $songiris = $karakter['lastlogin'];
    $bakiye = $karakter['bakiye'];
    $ehliyet = $karakter['license'];
    $skin = $karakter['skin'];
    $cinsiyet = $karakter['Cinsiyet'];
    $admin = $karakter['admin'];
	$birlik = $karakter['faction_id'];
	$parmakizi = $karakter['fingerprint'];
	$bank = $karakter['bankmoney'];
  }
  if($skin > 299){
    $skin = 299;
  }
  if ($ehliyet == 1) {
    $ehliyet = 'Var';
  }
  else
  {
    $ehliyet = 'Yok';
  }
  if ($cinsiyet == 0) {
    $cinsiyet = 'Erkek';
  }
  else
  {
    $cinsiyet = 'Kadın';
  }
}
else echo "<script> window.location.replace('index.php') </script>";



?>

<!DOCTYPE html>
<html lang="en">
<!-- Aloues Yaptı Bebeğim  --!>
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
<!-- Aloues Yaptı Bebeğim  --!>
    <!-- Title Page-->
    <title>Dashboard</title>
<!-- Aloues Yaptı Bebeğim  --!>
    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
<!-- Aloues Yaptı Bebeğim  --!>
    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
<!-- Aloues Yaptı Bebeğim  --!>
    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
   <!-- Aloues Yaptı Bebeğim  -->
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
  
 <!-- Aloues Yaptı Bebeğim  -->
</head>
 <!-- Aloues Yaptı Bebeğim  -->
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
                       
                      <!-- Aloues Yaptı Bebeğim  -->   
                       
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h3 class="title-2">Aloues UCP<label class="align-items-center mode-control">
            <input type="checkbox" id="mode-cbox">
            <span style="color:rgba(0, 0, 0, .6);"><i class="fas fa-sun" style="margin-right: 5px!important; color:rgba(255, 255, 255, .6);"></i></span>
			<span style="color:rgba(0, 0, 0, .6);"><i class="fa fa-moon" style="margin-right: 5px!important; color:rgba(255, 255, 255, .6);"></i></span>
        </label></h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-users"></i>Karakterlerim</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
							<?php
			$karakterCek = mysqli_query($baglanti,"SELECT * from characters WHERE account='$hesapID'");
			foreach($karakterCek as $kbilgi){
			?>
                                <li>
                                  <a href="main.php?id=<?php echo $kbilgi['id'];?>" > <i class="fas fa-male"></i><?php echo $kbilgi['charactername']; ?></a> 
								  <hr>
                                </li>
			<?php } ?>
                            </ul>
                        </li>
                        
                        
                       
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                
                              
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                
                                  
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">Ayarlar</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                           
											
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                   
														
                                                        <a href="cikisyap.php">Çıkış Yap</a>
														<hr>
		
                                                </div>
                                                
                                               
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1"><?php echo "Hoşgeldin ".$karakteradi."!"; ?></h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                       
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo number_format($para);?></h2>
                                                <span>Cebindeki Para</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="fas fa-university"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo number_format($bank);?></h2>
                                                <span>Banka Hesabı</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-male"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $yas;?></h2>
                                                <span>Karakter Yaşı</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo number_format($bakiyse);?></h2>
                                                <span>OOC Bakiye</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Karakter Bilgileriniz</h3>
										<hr>
										<br>
										<h5 class="muted"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Karakter Adı : <?php echo $karakteradi; ?></h5>
										<br>
										<h5 class="muted"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Boy : <?php echo $boy; ?></h5>
										<br>
										<h5 class="muted"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Kilo : <?php echo $kilo; ?></h5>
										<br>
										<h5 class="muted"><i class="fas fa-user"></i>&nbsp;&nbsp;&nbsp;Son Görülen Yer : <?php echo $dogumyeri; ?></h5>
										<br>
										
                                        
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card chart-percent-card">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Durum</h3>
										<hr>
                                        <div class="row no-gutters">
                                            <div class="col-xl-6">
                                              <p class="muted">Can</p>  
										<div class="progress mb-3">
										
											<div class="progress-bar bg-success progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo "$can"; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="muted">Zırh</p>
										<div class="progress mb-3">
											<div class="progress-bar bg-danger progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo "$zirh"; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										<p class="muted">Açlık</p>
										<div class="progress mb-3">
											<div class="progress-bar bg-warning progress-bar-striped progress-bar-animated" role="progressbar" style="width: <?php echo "$aclik"; ?>%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
										
										
										
                                            </div>
                                            <div class="col-xl-6">
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
						
                        <div class="row">
                            <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Araçlarım</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>İD</th>
                                                <th>Benzin</th>
                                                <th>Plaka</th>
                                                <th >Kilit</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
									$telnocek = mysqli_query($baglanti,"SELECT * from phones WHERE boughtbuy='$karakterid' LIMIT 10;");
								     $karakterAracCek = mysqli_query($baglanti,"SELECT * from vehicles WHERE owner='$karakterid' LIMIT 10;");
	                                 $karakterEvCek = mysqli_query($baglanti,"SELECT * from interiors WHERE owner='$karakterid' LIMIT 10;"); 
								     $ooccezacek = mysqli_query($baglanti,"SELECT * from adminhistory WHERE user='$hesapID' LIMIT 5;"); 
									 									 foreach($karakterAracCek as $arac){

										?>
                                            <tr>
												<td><?php echo $arac['id'];?></td>
												<td><?php echo "%".$arac['fuel'];?></td> 
												<td><?php echo $arac['plate'];?></td>
												<td><?php if($arac['locked'] == "1"){echo'Kilitli <i class="fa fa-lock"></i>';}else{echo'Açık <i class="fa fa-unlock"></i>';}?></td>
											</tr>
											
																		 <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            
                       <div class="col-lg-12">
                                <h2 class="title-1 m-b-25">Mülklerim</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
												<th>Adı</th>
												<th>Fiyat</th>
												<th>Kilit</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
								
								    
	                                 $karakterEvCek = mysqli_query($baglanti,"SELECT * from interiors WHERE owner='$karakterid' LIMIT 10;"); 
								    
									 									 foreach($karakterEvCek as $ev){

										?>
                                           <tr>
												<td><?php echo $ev['id'];?></td>
												<td><?php echo $ev['name'];?></td>     
												<td><?php echo $ev['cost'];?></td>
												<td><?php if($arac['locked'] == "1"){echo'Kilitli <i class="fa fa-lock"></i>';}else{echo'Açık <i class="fa fa-unlock"></i>';}?></td>
											</tr>
											
																		 <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                            
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Copyright © Aloues </p>
                                </div>
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
