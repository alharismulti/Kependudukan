<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css" type ="text/css" >
    <script type = "text/javascript" src ="assets/js/bootstrap.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Pendataan Penduduk</title>
</head>
<body>

    <div class ="container-fluid">
    <h1 class = "text-center mt-5"> Sistem Informasi Pendataan Penduduk</h1>
    <h2 class = "text-center">Halaman Login</h2>
        <div class ="row">
            <div class = "col-md-4 mx-auto">
                <div class="card mt-4">
                <div class="card-body">

                <div class ="alert-danger">              </div>

                    <?php
                    if(isset($_GET['pesan'])){
                        if($_GET['pesan']=="gagal"){
                            echo "<div class = 'alert-danger'>Maaf! username dan Pasword Salah</div>";
                        }else if($_GET['pesan']=="logout"){
                            echo "anda telah berhasil Logout";
                        }else if($_GET['pesan']=="belumlogin"){
                            echo "anda Harus Login Dulu";
                    }}
                    ?>
                    <form action ="aksi_login.php" method ="post">
                    
                    <div class ="form-group">
                        <label for="">Username</label>
                        <input type ="text" name ="uname" required="required" class ="form-control" placeholder ="Masukan Username">
                    </div>
                    <div class ="form-group">
                        <label for="">Username</label>
                        <input type= "password" name = "pass" required="required" class ="form-control" placeholder ="Masukan Password">
                    </div>
                    <input type="submit" name="submit" value ="login" class = "btn btn-primary btn-block md-3">
   
                    </form>    
                </div>
                </div>
            </div>
        </div>
            
    </div>
    
</body>
</html>