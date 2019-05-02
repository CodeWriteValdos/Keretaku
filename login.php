<?php 
    include 'config/koneksi.php';

     if(isset($_POST['login'])){
        if ($_POST['username']=="" || $_POST['password']=="") {
            ?>
                <script>alert('Tolong Di Isi !');</script>
            <?php
        }
        else{
            $sql = "SELECT * FROM tbl_login WHERE username='$_POST[username]' and password='$_POST[password]'";
            $query = mysqli_query($con, $sql);
            $cek = mysqli_num_rows($query);
            if($cek > 0){
                $cek = mysqli_fetch_assoc($query);
                if ($cek['akses'] == 'admin') { ?>
                    <script>
                    alert('Selamat Datang Admin');
                    window.location.href="admin/index.php";
                    </script>";
                <?php }
            }
            else{
                echo "<script>alert('User Tidak ada !'); document.location.href='login.php';</script>";
            }
        }
     }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
     <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kereta LTE</title>
    <link rel="stylesheet" href="assets/library/bootstrap/css/bootstrap.min.css">
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <strong>Email: </strong>KeretaLTE@gmail.com
                    &nbsp;&nbsp;
                    <strong>Support: </strong>+90-897-678-44
                </div>

            </div>
        </div>
    </header>
    <!-- HEADER END-->
    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <h1>Kereta LTE</h1>
                </a>

            </div>

            <div class="left-div">
                <div class="user-settings-wrapper">
                    <ul class="nav">
                        <li class="dropdown">
                            
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- LOGO HEADER END-->
   
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4 class="page-head-line">Please Login To Administrator </h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <form action="" method="post">
                        <label>Enter Email ID : </label>
                        <input name="username" type="text" class="form-control" required />
                        <label>Enter Password :  </label>
                        <input name="password" type="password" class="form-control" required />
                        <hr />
                        <button class="btn btn-primary" name="login" type="submit">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Kereta LTE| By : Muhamad Rivaldi
                </div>

            </div>
        </div>
    </footer>
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
</body>
</html>
