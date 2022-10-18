<?php

$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
     if($nilai >=0 and $nilai<=30) {
      $kt = "Kurang sekali";
   } else if ($nilai >=31 and $nilai<=59 ) {
      $kt = "Kurang";
   } else if($nilai >=60 and $nilai<=69) {
      $kt = "Cukup";
   } else if($nilai >=70 and $nilai<=80) {
      $kt = "Baik";
   }else if($nilai >= 81 and $nilai<=100) {
      $kt = "Baik sekali";
   }  else {
      $kt = "Nilai yang anda inputkan salah";
   }


?>
<!DOCTYPE html>
<html style="margin: 0;padding: 0;outline: 0;font-family: TNYbold;">
<head>
    <title>FORM</title>
    <link rel="stylesheet" type="text/css" href="styleForm.css">
</head>
<body style=" height: 100vh;background-image: url(https://i.pinimg.com/736x/f7/dc/0b/f7dc0b7bd20e0f982627672f1b936c9a.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div class="container" style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);padding: 20px 25px;width: 300px;background-color: rgba(0,0,0,.7);box-shadow: 0 0 10px rgba(255,255,255,.3);">
        
          <h1 style="text-align: left;color: #fafafa;margin-top:10px;margin-bottom: 35px;text-transform: uppercase;border-bottom: 4px solid #2979ff;">CHECK NILAI</h1>
            <form method="POST">
                <label style="text-align: left;color: #90caf9;font-size: 20px;">Nama</label><br>
                <label style=" width: calc(100% - 20px);padding: 8px 10px;margin:25px;border: none;background-color: transparent;border-bottom: 2px solid #2979ff;color: #fff;font-size: 20px;"><?php echo $nama;?></label><br><br>
                <label style="text-align: left;color: #90caf9;font-size: 20px;">Nilai</label><br>
                <label style=" width: calc(100% - 20px);padding: 8px 10px;margin: 25px;border: none;background-color: transparent;border-bottom: 2px solid #2979ff;color: #fff;font-size: 20px;"><?php echo $nilai;?></label><br><br>
                <label style="text-align: left;color: #90caf9;font-size: 20px;">Kategori</label><br>
                <label style=" width: calc(100% - 20px);padding: 8px 10px;margin: 25px;border: none;background-color: transparent;border-bottom: 2px solid #2979ff;color: #fff;font-size: 20px;"><?php echo $kt;?></label><br><br><br>
                
                </form>
         
    </div>
</body>
</html>    
               
