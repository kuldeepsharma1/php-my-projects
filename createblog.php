<?php require_once 'utils/session.php' ?>
<?php 

                                          
     if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
      header('Location: login.php');
      exit;
     }
      
 ?>    


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Create Blog - HeroBiz Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Variables CSS Files. Uncomment your preferred color scheme -->
  <link href="assets/css/variables.css" rel="stylesheet">
  <!-- <link href="assets/css/variables-blue.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-green.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-orange.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-purple.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-red.css" rel="stylesheet"> -->
  <!-- <link href="assets/css/variables-pink.css" rel="stylesheet"> -->

  <!-- Template Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: HeroBiz
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/herobiz-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php require_once 'utils/_nav.php' ?> 








  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>



        <form action="logic.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Title</label>
            <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp" required>

          </div>
          <div class="mb-3">
            <label for="exampleInputPassword2"  class="form-label">Short description</label>
            <input type="text" class="form-control" name="short_desc" id="exampleInputPassword2" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1"  class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="exampleInputPassword1" required>
          </div>
          <div class="form-floating">
            <textarea class="form-control" placeholder="Write Your Content here" name="content" id="floatingTextarea2" required
              style="height: 100px"></textarea>
            <label for="floatingTextarea2">Blog Content</label>
          </div>

          <div>
            <label for="formFileLg" class="form-label">Large file input example</label>
            <input class="form-control form-control-lg" id="formFileLg" name="img" type="file" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->


  </main><!-- End #main -->

  <?php require_once 'utils/footer.php' ?>

</body>

</html>

