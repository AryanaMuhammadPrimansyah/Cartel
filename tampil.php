<?php
    include 'koneksi.php';
    
    $siswa = mysqli_query($connection, "SELECT * FROM pemesanan ORDER BY name ASC");

    if (isset($_GET['id'])) {
        $id_siswa = $_GET['id'];
        $data_pembayaran = mysqli_fetch_assoc(mysqli_query($connection, "SELECT * FROM pemesanan WHERE id = '$id_siswa'"));

    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cartel Shoes Care - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/download (1).jpg" rel="icon">
  <link href="assets/img/download (1).jpg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="index.php">Cartel Shoes Care</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">ADMIN</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

 <br><br><br><br><br><br>

    
<table class="table table-bordered" id="myTable">
    <thead>
        <tr>
        <th scope="col">NO.</th>
        <th scope="col">NAMA</th>
        <th scope="col">EMAIL</th>
        <th scope="col">SUBJECT</th>
        <th scope="col">NO HANDPHONE</th>
        <th scope="col">MESSAGE</th>
        <th scope="col">STATUS PEMBAYARAN</th>
        <th scope="col">AKSI</th>
        </tr>
    </thead>
    <tbody>
    <?php
    include('koneksi.php');
    $no = 1;
    $query = mysqli_query($connection,"SELECT * FROM pemesanan");
    while($row = mysqli_fetch_array($query)){
    ?>

    <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['subject'] ?></td>
            <td><?php echo $row['no_hp'] ?></td>
            <td><?php echo $row['message'] ?></td>
            <td><?php echo $row['status_pembayaran'] ?></td>
            
            <td class="text-center">
                                <?php if ($row['status_pembayaran'] == 'Belum' ) : ?>
                                    <a href="bayar.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-success">Bayar</a>
                                <?php else: ?>
                                    <a href="bayar.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-success">Ubah</a>
                                <?php endif ?>
            <a href="hapus.php?id=<?php echo $row['id'] ?>" class="btnn">HAPUS</a>
           
         </td>
         
        </tr>
    <?php } ?>
    </tbody>
    </table>
    <br><br><br><br><br><br><br><br>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; 2024 <strong><span>Cartel Shoes Care</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/maxim-free-onepage-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">Cartel Shoes Care</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>



