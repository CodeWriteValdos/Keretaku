<?php 
    include 'config/koneksi.php';

    if(isset($_POST['tambah'])){
        $sql = "INSERT INTO tbl_input VALUES('$_POST[kode_kereta]','$_POST[kereta]','$_POST[kelas]','$_POST[tgl_berangkat]','$_POST[kota_asal]','$_POST[kota_tujuan]','$_POST[berangkat]','$_POST[tiba]','$_POST[harga]')";
        $query = mysqli_query($con, $sql);
        if($query){
            echo "<script>alert('good'); document.location.href='jadwal.php'</script>";
        }
    }

    // if (isset($_POST['update'])) {
    //     $sql = "UPDATE tbl_input SET
    //         kereta = '$_POST[kereta]',
    //         kelas = '$_POST[kelas]',
    //         tgl_berangkat = '$_POST[tgl_berangkat]',
    //         kota_asal = '$_POST[kota_asal]',
    //         kota_tujuan = '$_POST[kota_tujuan]',
    //         berangkat = '$_POST[berangkat]',
    //         tiba = '$_POST[tiba]',
    //         harga = $_POST[harga]
    //          WHERE kode_kereta = '$_GET[kode_kereta]' ";
    //     $query = mysqli_query($con, $sql);
    //     if($query){
    //         echo "<script>alert('Success...');document.location.href='?menu = daftar'</script>";
    //     }
    // }
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
                            <li><a href="pesan.php">Pesan Tiket</a></li>
                            <li><a class="menu-top-active" href="jadwal.php">Jadwal Kereta Api</a></li>
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
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">  
                        <div class="panel-body">
                            <h1 align="center">Tambah Jadwal Kereta</h1>
                            <form method="post" class="form-horizontal" role="form">
                              <div class="form-group">
                                <label class="control-label col-md-3" for="email">Kode Kereta :</label>
                                <div class="col-md-8">
                                  <input type="text" name="kode_kereta" class="form-control" id="email" placeholder="Enter Nomor Kereta" value="<?php echo @$edit['kode_kereta'] ?>" <?php echo @$disabled; ?>>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Kereta :</label>
                                <div class="col-md-8"> 
                                  <input type="Text" name="kereta" class="form-control" id="pwd" placeholder="Enter Kereta" value="<?php echo @$edit['kereta'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Kelas :</label>
                                <div class="col-md-8"> 
                                  <select name="kelas" id="" class="form-control" value="<?php echo @$edit['kelas'] ?>">
                                      <option value="ekonomi">Ekonomi</option>
                                      <option value="bisnis">Bisnis</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Tanggal:</label>
                                <div class="col-md-8"> 
                                  <input type="date" name="tgl_berangkat" class="form-control" id="pwd" placeholder="Enter Tanggal" value="<?php echo @$edit['tgl_berangkat'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Kota Asal :</label>
                                <div class="col-md-8"> 
                                  <select name="kota_asal" id="" class="form-control" value="<?php echo @$edit['kota_asal'] ?>">

                                      <option value="Bogor">Bogor</option>
                                      <option value="Depok">Depok</option>
                                      <option value="Jakarta">Jakarta</option>
                                      <option value="Bandung">Bandung</option>
                                      <option value="Surabaya">Surabaya</option>
                                      <option value="Yogyakarta">Yogyakarta</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Kota Tujuan :</label>
                                <div class="col-md-8"> 
                                  <select name="kota_tujuan" id="" class="form-control" value="<?php echo @$edit['kota_tujuan'] ?>">
                                      <option value="Bogor">Bogor</option>
                                      <option value="Depok">Depok</option>
                                      <option value="Jakarta">Jakarta</option>
                                      <option value="Bandung">Bandung</option>
                                      <option value="Surabaya">Surabaya</option>
                                      <option value="Yogyakarta">Yogyakarta</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Berangkat :</label>
                                <div class="col-md-8"> 
                                  <input type="time" name="berangkat" class="form-control" value="<?php echo @$edit['berangkat'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Tiba :</label>
                                <div class="col-md-8"> 
                                  <input type="time" name="tiba" class="form-control" value="<?php echo @$edit['tiba'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3" for="pwd">Harga :</label>
                                <div class="col-md-8"> 
                                  <input type="text" name="harga" class="form-control" id="pwd" placeholder="Enter Harga" value="<?php echo @$edit['harga'] ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                    <?php if(@$_GET['kode_kereta']==""){ ?>
                                    <button class="btn-a btn-primary" name="tambah" align="center">Tambahkan</button>
                                    <?php }else{ ?> 
                                    <button class="btn btn-danger" name="update" align="center">Upgrade</button>
                                    <?php } ?>
                                    
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
                    &copy;2017 Kerete LTE | By : Muhamad Rivaldi</a>
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
            margin-left: 200px;
            border-radius: 0.5em; 
        }
    </style>
</body>
</html>
