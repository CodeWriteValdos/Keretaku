<?php 
    include "config/koneksi.php";

    if(isset($_GET['hapus'])){
        @$sql = "DELETE FROM tbl_input WHERE kode_kereta='$_GET[kode_kereta]'";
        $query = mysqli_query ($con,$sql);
        if ($query) {
            echo "<script>alert('Success Terhapus..')</script>";
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
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                                <span class="glyphicon glyphicon-user" style="font-size: 25px;"></span>
                            </a>
                            <div class="dropdown-menu dropdown-settings">
                                <div class="media">
                                    <a class="media-left" href="#">
                                        <img src="../images/af.png" alt="" class="img-rounded" />
                                    </a>
                                    <div class="media-body">
                                        <h4 class="media-heading">Muhamad Rivaldi</h4>
                                        <h5>Developer & Designer</h5>

                                    </div>
                                </div>
                                <p><strong>Personal Bio : </strong></p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                <a align="center" href="../index.php" class="btn btn-danger btn-sm">Logout</a>
                            </div>
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
                            <li><a class="menu-top-active" href="jadwal.php">Jadwal Kereta Api</a></li>
                            <li><a href="tiket.php">Reservasi Tiket</a></li>
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
                <div class="col-md-4">
                    <a href="tambah.php">+ Tambah Daftar</a>
                </div>
            </div>
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
                                    <th>Aktion</th>
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
                                        <a onclick="return confirm('Yakinkah ??')" href="?menu=jadwal&hapus&kode_kereta=<?php echo $data['kode_kereta']; ?>"><button class="btn btn-danger">Hapus</button></a>
                                        <a href="tambah.php?menu=jadwal&ubah&kode_kereta=<?php echo $data['kode_kereta'] ?>"><button class="btn btn-success">Edit</button></a>
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
    <script src="assets/js/jquery-1.11.1.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <style>
        .btn{
            border-radius: 0.5em;
        }
    </style>
</body>
</html>
