<!DOCTYPE html>
<html style="margin: 0;padding: 0;outline: 0;font-family: TNYbold;">
<head>
    <title>FORM</title>
    <link rel="stylesheet" type="text/css" href="styleForm.css">
</head>
<body style=" height: 100vh;background-image: url(https://i.pinimg.com/736x/f7/dc/0b/f7dc0b7bd20e0f982627672f1b936c9a.jpg);background-size: cover;background-position: center;background-repeat: no-repeat;">
    <div style="position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);padding: 20px 25px;width: 300px;background-color: rgba(0,0,0,.7);box-shadow: 0 0 10px rgba(255,255,255,.3);">
        
          <h1 style="text-align: left;color: #fafafa;margin-top:10px;margin-bottom: 35px;text-transform: uppercase;border-bottom: 4px solid #2979ff;">CHECK NILAI</h1>
            <form name="finput" method="POST" action="output.php">
                <label style="text-align: left;color: #90caf9;font-size: 20px;">Nama</label><br>
                <input name="nama" type="text" placeholder="Isi Nama " style=" width: calc(100% - 20px);padding: 8px 10px;margin-bottom: 15px;border: none;background-color: transparent;border-bottom: 2px solid #2979ff;color: #fff;font-size: 17px;"><br>
                <label style="text-align: left;color: #90caf9;font-size: 20px;">Nilai</label><br>
                <input name="nilai" type="text" placeholder="Isi Nilai" style=" width: calc(100% - 20px);padding: 8px 10px;margin-bottom: 15px;border: none;background-color: transparent;border-bottom: 2px solid #2979ff;color: #fff;font-size: 17px;"><br>
                
                <button style="width: 100%;padding: 10px 0;border: none;background-color:#2979ff;font-size: 18px;color: #fafafa;" >OK</button>
            </form>
         
    </div>
</body>
</html>     
               