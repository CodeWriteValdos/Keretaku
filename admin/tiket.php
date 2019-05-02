<?php 
    include 'config/koneksi.php';

    if(isset($_GET['hapus'])){
        @$sql = "DELETE FROM tbl_pesan WHERE kode_kereta='$_GET[kode_kereta]'";
        $query = mysqli_query ($con,$sql);
        if ($query) {
            echo "<script>alert('Success Terhapus..')</script>";
        }
    }

    if(isset($_POST))
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
                            <li><a href="jadwal.php">Jadwal Kereta Api</a></li>
                            <li><a class="menu-top-active" href="tiket.php">Reservasi Tiket</a></li>
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
                        <h1 class="page-head-line">Data Booking</h1>
                    </div>
                </div>
                <div class="row">
                <div class="col-md-12">
                  <!--   Kitchen Sink -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Booking Online Kereta
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive ">
                                <table class="table table-striped table-bordered text-center">
                                    <thead class="text-center">
                                        <tr>
                                            <th>Kode Kereta</th>
                                            <th>Nama</th>
                                            <th>Alamat</th>
                                            <th>No.Hp</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <?php 
                                    $sql = "SELECT * FROM tbl_pesan";
                                    $query = mysqli_query($con, $sql);
                                    while ($data = mysqli_fetch_array($query)) {        
                                    ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo @$data['kode_kereta']; ?></td>
                                            <td><?php echo @$data['nama']; ?></td>
                                            <td><?php echo @$data['alamat']; ?></td>
                                            <td><?php echo @$data['nomor_hp']; ?></td>
                                            <td>
                                                <a onclick="return confirm('Yakinkah ??')" href="?menu=tiket&hapus&kode_kereta=<?php echo $data['kode_kereta']; ?>"><button class="btn btn-danger">Hapus</button></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                     <!-- End  Kitchen Sink -->
                </div>
                </div>
            </div>

        </div>
    </div>
    <!-- CONTENT-WRAPPER SECTION END-->
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
</body>
</html>