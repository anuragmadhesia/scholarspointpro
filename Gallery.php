<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <link rel="icon" href="images/spp.png" type="image/gif" sizes="16x16">
    <link rel="stylesheet" href="css/my.css">
  <title>Gallery</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

<style>
.gallery .gallery-item {
  overflow: hidden;
  border-right: 3px solid #454035;
  border-bottom: 3px solid #454035;
}

.gallery .gallery-item img {
    height: 250px;
      min-width: 350px;
  transition: all ease-in-out 0.4s;
}

.gallery .gallery-item:hover img {
  transform: scale(1.1);
}
.gallery-footer{
    text-align: center;
    font-weight: 500;
    color:#fff;
    padding-top: 20px;
    padding-bottom: 10px;
    background-color: #343a40 ;
}
.gallery-footer a{
    text-decoration: none;
    color:#fff;
}
</style>
</head>

<body>
<?php include('includes/header.php');?>
<div class="mainbody">
    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery" style="padding-top:110px;">

      <h2 class=" text-center" style="color:golden;padding-bottom:15px;">Gallery of Our Institute</h2>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row no-gutters">

        <?php include('includes/dbconnection.php');?>
        <?php $ret=mysqli_query($con,"select * from tbl_gallery");
        while($row=mysqli_fetch_array($ret))
        {
        echo'<div class="col-lg-3 col-md-4">
                <div class="gallery-item">
                    <a href="admin/images/gallery/'.$row['Image'].'" class="venobox" data-gall="gallery-item">
                    <img src="admin/images/gallery/'.$row['Image'].'" alt="" class="img-fluid">
                    </a>
                </div>
            </div>';
        }?>

        </div>

      </div>
    </section><!-- End Gallery Section -->
</div>
<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>
<div class="gallery-footer">
    <p>© All Rights Reserved. By <a href="https://github.com/anuragmadhesia" target="_blank">Anurag Madhesia </a></p>
</div>
</body>

</html>