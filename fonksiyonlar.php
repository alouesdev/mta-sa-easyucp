<?php
    include 'baglan.php';
    session_start();

    function GirisKontrol($girisDurum = false) {
        switch($girisDurum)
        {
            case false: {
                // Giriş yapmamış kişilerin görüntüleyebileceği bir alana giriş yapan ziyaretçiler, otomatik olarak giriş sayfasına yönlendirilir.
                if(trim($_SESSION['giris'])) {
                    header('Location: login.php');
                }
                
                break;
            }
            
            case true: {
                // Giriş yapmış kişilerin görüntüleyebileceği bir alana giriş yapan ziyaretçiler, otomatik olarak anasayfaya yönlendirilir.
                if(!trim($_SESSION['giris'])) {
                    header('Location: main.php');
                }

                break;
            }
        }
    }
?>
