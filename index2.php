<?PHP

include 'baglan.php';
session_start();	
?>
<?php

// Giriş yapmış üyeler, giriş yapma sayfasına giremez. Bu sebepten dolayı bu sayfayı görüntüleyen üyeler anasayfaya yönlendirilir.
if(trim($_SESSION['giris'])) {
	header('Location: main.php');
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
		  echo "<script> window.location.replace('main.php') </script>";
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
    <meta charset="UTF-8">
    <title>Giriş Yap</title>
    <meta name="title" content="Yoldaş Host - MTA:San Andreas Roleplay Sunucusu">
    <meta name="description" content="Yoldaş Host sunucusu GTA: San Andreas üzerinde rol yapmanızı sağlayan bir sunucudur. Oyun içerisinde polis, iş adamı, medyacı, doktor, çete, mafya olabilirsiniz. Yapacaklarınız tamamen hayalinize kalmış ve Amerika'da yaşıyorsunuz!">
	<meta name="keywords" content="gta roleplay, mta roleplay, roleplay, Yoldaş Host, arp, mta, arp mta, gtasa roleplay, samp roleplay,  fivem roleplay, gta sa roleplay, roleplay oyunu, roleplay oyunlar, roleplaygame, roleplay game, arpmta, arenaroleplay, Yoldaş Host, Yoldaş Host, Yoldaş Host">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no shrink-to-fit=no">
    <meta name="robots" content="index">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon" />	
	<link rel="stylesheet" href="stylesheets/project.css">
	<link rel="stylesheet" href="stylesheets/uikit.min.css">	
	<link rel="stylesheet" href="stylesheets/bootstrap.min.css">	
	<link rel="stylesheet" href="fonts/all.css">	
</head>
<body>

	<section class="ayarlar p-5">
		<div class="container">
			<div class="card g-0 mt-0" uk-scrollspy="cls: uk-animation-slide-top; repeat: false" style="width:400px!important; margin-left:450px; margin-top:100px!important;">
				<div class="card-body mb-0" >
					<div class="container">
						<div class="row">
							<!--div class="alert alert-danger p-1 fw-bold" role="alert">
								<i class="far fa-info-circle" style="margin-right: 5px;"></i> Şifre veya Kullanıcı Adı yanlış! Lütfen tekrar deneyiniz.
							</div-->
							<!--div class="alert alert-danger p-1 fw-bold" role="alert">
								<i class="far fa-info-circle" style="margin-right: 5px;"></i> Korsan lisans tespit edildi.
							</div>
							<!--div class="alert alert-warning p-1 fw-bold" role="alert">
								<i class="far fa-info-circle" style="margin-right: 5px;"></i> Sunucuya bağlanılamadı! Lütfen tekrar deneyiniz.
							</div-->
							
							<div class="col-md-12" id="login">
							
								<h3 class="card-title mb-4 mt-2"><i class="far fa-user" style="margin-right: 5px;"></i> Giriş Yap <label class="align-items-center mode-control">
            <input type="checkbox" id="mode-cbox">
            <a class=""><span style="color:rgba(255, 255, 255, .6);"><i class="fas fa-sun" style="margin-right: 5px!important; color:rgba(255, 255, 255, .6);"></i> </span></a>
			<a class=""><span style="color:rgba(0, 0, 0, .6);"><i class="fa fa-moon" style="margin-right: 5px!important; color:rgba(0, 0, 0, .6);"></i> </span></a>
        </label></h3>
								<p class="card-text text-muted mb-1"><i class="far fa-chevron-right" style="margin-right: 5px; font-size: 13px!important;"></i> <strong>Kullanıcı Adı: </strong>admin</p>
								<p class="card-text text-muted mb-4"><i class="far fa-chevron-right" style="margin-right: 5px; font-size: 13px!important;"></i> <strong>Şifre</strong> : admin 
								<form action="" method="post">
									<div class="uk-margin mb-2">
										<label class="uk-form-label mb-2 fw-bold" for="form-stacked-text">Kullanıcı Adı</label>
										<div class="uk-form-controls">
											<input class="uk-input" id="form-stacked-text" name="k_adi" type="text" placeholder="Kullanıcı Adı">
										</div>
									</div>
									<div class="uk-margin mb-2">
										<label class="uk-form-label mb-2 fw-bold" for="form-stacked-text">Şifre</label>
										<div class="uk-form-controls">
											<input class="uk-input" id="form-stacked-text" name="k_sif" type="password" placeholder="Şifre">
										</div>
									</div>
									<div class="uk-margin mb-3">
										<div class="uk-form-controls">
											<label class="uk-form-label me-2 mb-3 fw-bold" for="form-stacked-text">Beni Hatırla</label>
											<input class="uk-checkbox" id="form-stacked-text" type="checkbox">
										</div>
									</div>
									<button class="btn btn-primary mb-1" name="gonder">Giriş Yap</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<footer class="footer bg-darkk text-muted p-3">
		<div class="container-fluid">
			<div class="row">
				<div class="copytext text-center mb-1">
					<a href="" class="uk-button-text">Yoldaş Host © Aloues</a>
				</div>
				<div class="copytext text-center">
					Telif Hakkı &copy; Yoldaş Host | Tüm Hakları Saklıdır
				</div>
			</div>
		</div>
	</footer>

	<div class="modal fade" id="bakim" tabindex="-1" aria-labelledby="bakim" aria-hidden="true">
		<div class="modal-dialog">
		  <div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="videolar">Yoldaş Host</h5>
				<button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
			  Web sayfamız bir süreliğine bakımdadır.
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Kapat</button>
			</div>
		  </div>
		</div>
	</div>

<script src="scripts/bootstrap.min.js"></script>
<script src="scripts/uikit.min.js"></script>
<script src="scripts/jquery.min.js"></script>
<script src="scripts/jquery.typed.js"></script>
<script src="scripts/project.js"></script>

</body>
</html>