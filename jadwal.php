<?php 
    include "config/koneksi.php";

    /*if (isset($_GET['booking'])) {
        $sql = "SELECT * FROM tbl_input WHERE kode_kereta = '$_GET[kode_kereta]'";
        $query = mysqli_query($con, $sql);
        $pesan = mysqli_fetch_array($query);
        echo "<script>alert('Anda akan memesan tiket ini'); document.location.href='pesan.php'</script>";
    }*/

    // if(isset($_GET['hapus'])){
    //     @$sql = "DELETE FROM tbl_input WHERE kode_kereta='$_GET[kode_kereta]'";
    //     $query = mysqli_query ($con,$sql);
    //     if ($query) {
    //         echo "<script>alert('Success Terhapus..')</script>";
    //     }
    // }
    // if(isset($_GET['edit'])){
    //     $sql = "SELECT * FROM tbl_input WHERE kode_kereta='$_GET['kode_kereta']'";
    //     $query = mysqli_query ($con,$sql);
    //     $edit = mysqli_fetch_array($query);
    //     $disabled = "disabled";
    //     if($edit){
    //         echo "<script>alert('data akan diedit'); document.location.href='tambah.php'</script>";
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
                <div class="col-md-12">
                    <div class="panel panel-default">    
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped tablesorter">
                                <tr>
                                    <th>Nomor Kereta</th>
                                    <th>Kereta</th>
                                    <th>Kelas</th>
                                    <th>Tanggal Keberangkatan</th>
                                    <th>Kota Asal</th>
                                    <th>Kota Tujuan</th>
                                    <th>Berangkat</th>
                                    <th>Tiba</th>
                                    <th>Harga</th>
                                    <th>Action</th>
                                </tr>
                                <?php 
                                    $sql = "SELECT * FROM tbl_input";
                                    $query = mysqli_query($con, $sql);
                                    while ($data = mysqli_fetch_array($query)) {        
                                 ?>
                                <tr>
                                    <td><?php echo $data['kode_kereta']; ?></td>
                                    <td><?php echo $data['kereta']; ?></td>
                                    <td><?php echo $data['kelas']; ?></td>
                                    <td><?php echo $data['tgl_berangkat']; ?></td>
                                    <td><?php echo $data['kota_asal']; ?></td>
                                    <td><?php echo $data['kota_tujuan']; ?></td>
                                    <td><?php echo $data['berangkat']; ?></td>
                                    <td><?php echo $data['tiba']; ?></td>
                                    <td><?php echo $data['harga']; ?></td>
                                    <td>
                                        <a href="pesan.php?menu=jadwal&booking&kode_kereta=<?php echo $data['kode_kereta']; ?>"><button class="btn btn-primary">Booking</button></a>
                                        <!-- <a href="?menu=jadwal&edit&kode_kereta=<?php echo $data['kode_kereta']; ?>">Edit</a> -->
                                    </td>
                                </tr>
                                <?php 
                                   }
                                ?>
                            </table>
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
        .btn{
            border-radius: 0.5em;
        }
    </style>
</body>
</html>
