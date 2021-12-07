<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Selamat Datang</title>

            <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
            <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
            <link rel="stylesheet" href="assets/libs/css/style.css">
            <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
            <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
            <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
            <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
            <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
            <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
            
            <!-- Style here  -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="assets/cssLogin.css">

        </head>
        <body>
            <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan'] == "gagal"){
                        echo "<script type='text/javascript'>alert('Login gagal! username dan password salah!');</script>";
                    }else if($_GET['pesan'] == "logout"){
                        echo "<script type='text/javascript'>alert('Anda telah berhasil logout!');</script>";
                    }else if($_GET['pesan'] == "belum_login"){
                        echo "<script type='text/javascript'>alert('Anda harus login terlebih dahulu!');</script>";
                    }
                }
            ?>
            
            <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="dashboard.php">RFID PHP</a>
                </nav>
            </div>

            <div class="container mt-2">
                <form class="box" action="cek-login.php" method="post" onSubmit="return validasi()">
                    <h1>Selamat Datang</h1>
                    <br>
                        <input type="text" id="username" name="username" placeholder="Masukan Username" autocomplete="off">
                        <input type="password" id="password" name="password" placeholder="Masukan Password" autocomplete="off">
                        <input type="submit" value="Masuk">
                </form>
            </div>


        </body>

        <script type="text/javascript">
            function validasi() {
                var username = document.getElementById("username").value;
                var password = document.getElementById("password").value;		
                if (username != "" && password!="") {
                    return true;
                }else{
                    alert('Username dan Password harus di isi !');
                    return false;
                }
            }
        
        </script>
    </html>