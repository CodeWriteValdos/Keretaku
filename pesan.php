<?php 
    include "config/koneksi.php";
    if (isset($_GET['booking'])) {
        $sql = "SELECT * FROM tbl_input WHERE kode_kereta = '$_GET[kode_kereta]'";
        $query = mysqli_query($con, $sql);
        $pesan = mysqli_fetch_array($query);
        echo "<script>alert('Anda akan memesan tiket ini');</script>";
        if ($pesan['kota_asal'] == "bogor" ) {
            $kota_asal = "Bogor";
        }elseif ($pesan['kota_asal'] == "jakarta") {
            $kota_asal = "Jakarta";
        }elseif ($pesan['kota_asal'] == "depok") {
            $kota_asal = "Depok";
        }elseif ($pesan['kota_asal'] == "bandung") {
            $kota_asal = "Bandung";
        }elseif ($pesan['kota_asal'] == "surabaya") {
            $kota_asal = "Surabaya";
        }elseif ($pesan['kota_asal'] == "yogyakarta") {
            $kota_asal = "Yogyakarta";
        }

        if ($pesan['kota_tujuan'] == "bogor" ) {
            $kota_tujuan = "Bogor";
        }elseif ($pesan['kota_tujuan'] == "jakarta") {
            $kota_tujuan = "Jakarta";
        }elseif ($pesan['kota_tujuan'] == "depok") {
            $kota_tujuan = "Depok";
        }elseif ($pesan['kota_tujuan'] == "bandung") {
            $kota_tujuan = "Bandung";
        }elseif ($pesan['kota_tujuan'] == "surabaya") {
            $kota_tujuan = "Surabaya";
        }elseif ($pesan['kota_tujuan'] == "yogyakarta") {
            $kota_tujuan = "Yogyakarta";
        }
    }

    if(isset($_POST['pesan'])){
        @$kode_kereta = htmlspecialchars($_GET[kode_kereta]);
        @$nama_lengkap = htmlspecialchars($_POST[nama_lengkap]);
        @$alamat = htmlspecialchars ($_POST[alamat]);
        @$nomor = htmlspecialchars ($_POST[nomor]);
        if ($kode_kereta == "" || $nama_lengkap == "" || $alamat == "" || $nomor == "") {
            echo "<script>alert('Harap booking terlebih dahulu, Cek di jadwal'); document.location.href='jadwal.php'</script>";
        }
        else{
            @$sql = "INSERT INTO tbl_pesan VALUES ('$kode_kereta', '$nama_lengkap', '$alamat', '$nomor')";
            $query = mysqli_query($con, $sql);
            if ($query) {
                echo "<script>alert('Data berhasil tersimpan..');</script>";
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
    <title>Free Responsive Admin Theme - ZONTAL</title>
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
    <section class="menu-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="index.php">Beranda</a></li>
                            <li><a class="menu-top-active" href="pesan.php">Pesan Tiket</a></li>
                            <li><a href="jadwal.php">Jadwal Kereta Api</a></li>
                            <li><a href="login.php">Login Page</a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">  
                        <div class="panel-body">
                            <h1 align="center">Pesan Tiket Kereta</h1>
                            <form method="post" class="form-horizontal" role="form">
                              <div class="form-group">
                                <label class="control-label col-md-3" for="email">Kode Kereta :</label>
                                <div class="col-md-8">
                                  <input type="text" name="kode_kereta" class="form-control" id="email" placeholder="Belum ada inputan" value="<?php echo @$pesan['kode_kereta'] ?>" disabled='disabled'>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Kota Asal :</label>
                                <div class="col-md-8"> 
                                <input type="text" class="form-control" name="kota_asal" placeholder="Belum ada inputan" value="<?= @$pesan['kota_asal'] ?>" disabled="disabled">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Kota Tujuan :</label>
                                <div class="col-md-8"> 
                                 <input type="text" class="form-control" name="kota_tujuan" placeholder="Belum ada inputan" value="<?= @$pesan['kota_tujuan'] ?>" disabled = "disabled">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Berangkat :</label>
                                <div class="col-md-8"> 
                                  <input type="time" name="berangkat" class="form-control" value="<?php echo @$pesan['berangkat'] ?>" disabled='disabled'>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Tiba :</label>
                                <div class="col-md-8"> 
                                  <input type="time" name="tiba" class="form-control" value="<?php echo @$pesan['tiba'] ?>" disabled='disabled'>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Harga :</label>
                                <div class="col-md-8"> 
                                  <input type="text" name="harga" class="form-control" id="pwd" placeholder="Belum ada inputan" value="<?php echo @$pesan['harga'] ?>" disabled='disabled'>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Nama Lengkap :</label>
                                <div class="col-md-8"> 
                                  <input type="text" name="nama_lengkap" class="form-control" id="pwd" placeholder="Enter Nama" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Alamat :</label>
                                <div class="col-md-8"> 
                                  <input type="text" name="alamat" class="form-control" id="pwd" placeholder="Enter Alamat" required>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">No.Hp :</label>
                                <div class="col-md-8"> 
                                  <input type="text" name="nomor" class="form-control" id="pwd" placeholder="Enter Nomor Hp" required>
                                </div>
                              </div>                              
                              <div class="form-group">
                                    <button class="btn-a btn-primary" name="pesan" align="center">Pesan</button>
                              </div>   
                            </form>
                        </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    &copy; 2017 Kereta LTE | By : Muhamad Rivaldi
                </div>

            </div>
        </div>
    </footer>
    <!-- FOOTER SECTION END-->
    <!-- JAVASCRIPT AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.11.1.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
    <style>
        .btn-a{
            border-radius: 0.5em;
            text-align:center;
            margin-left: 200px;
        }
    </style>
</body>
</html>
