# mta-sa-easyucp
Basic UCP For MTA:SA &copy; Aloues


1. Make a Remote MySQL Connection with your Virtual Server or Connect to Localhost.
2. Customize Theme.
3. I hope you will be satisfied using it.


If your infrastructure is OWLGAMING, add this code to login.php {


``` 
$hesapIDCek = mysqli_query($baglanti,"SELECT * from accounts WHERE username='$k_adi'"); 

            foreach($hesapIDCek as $hid){
                $hesapID = $hid['id'];
                $salt = $hid['salt'];
            }
                    
            $encryptionRule = "salt";
            $sifre_md5 = md5(md5($sifre).$salt);
        $sifredogrula = mysqli_query($baglanti,"SELECT * from accounts where username='$k_adi' and password='$sifre_md5'"); 
```



} Delete This Code {

```
 $encryptionRule = "wedorp";
        $sifre_md5 = md5($encryptionRule.$sifre);
        $sifredogrula = mysqli_query($baglanti,"SELECT * from accounts where username='$k_adi' and password='$sifre_md5'"); ```
```

}



Don't try to sell it or aloues will find you :)
