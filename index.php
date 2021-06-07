<?PHP

include 'baglan.php';
session_start();	
?>
<?php

// Giriş yapmış üyeler, giriş yapma sayfasına giremez. Bu sebepten dolayı bu sayfayı görüntüleyen üyeler anasayfaya yönlendirilir.
if(trim($_SESSION['giris'])) {
	header('Location: karaktersec.php');
}

if(isset($_POST['gonder']))
///ne yazıyım
{ 
	$sifre = $_POST['k_sif'];
    $k_adi = mysqli_real_escape_string($baglanti, $_POST['k_adi']);
  ///  $kadi = $_POST['k_adi'];
	$karakterbul = mysqli_query($baglanti, "SELECT * FROM characters WHERE charactername = '$k_adi'");
	$sorgu = mysqli_num_rows($karakterbul);
	
		$k_bul = mysqli_query($baglanti, "SELECT * FROM characters WHERE charactername = '$k_adi'");
		//$k_sif = mysqli_real_escape_string($baglanti, $_POST['k_sif']);
		  /// foreach($k_bul as $kd){
			////			  $salt = $kd['salt'];
				////	   }
		$encryptionRule = "wedorp";
        $sifre_md5 = md5($encryptionRule.$sifre);
        $sifredogrula = mysqli_query($baglanti,"SELECT * from accounts where username='$k_adi' and password='$sifre_md5'");
		
		
		///$sifredogrula = mysqli_query($baglanti, "SELECT * FROM accounts WHERE username = '$k_adi' AND password = '$k_sif'");
		$sifresorgu = mysqli_num_rows($sifredogrula);
	    if($sifresorgu >= 1)
	    {
		  $_SESSION['giris'] = $k_adi;
		  echo "<script> window.location.replace('karaktersec.php') </script>";
		}
		else{
			echo'';
		}
    
  	
}
else{
	echo'';
}   
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
    <title>Login</title>

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
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <img src="images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Kullanıcı Adı</label>
                                    <input class="au-input au-input--full" type="" name="k_adi" placeholder="Oyundaki Kullanıcı Adınız">
                                </div>
                                <div class="form-group">
                                    <label>Şifre</label>
                                    <input class="au-input au-input--full" type="password" name="k_sif" placeholder="********">
                                </div>
                                
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit" name="gonder">Giriş Yap!</button>
                                
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
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