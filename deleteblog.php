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

  <title>Delete Blog - HeroBiz Bootstrap Template</title>
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

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <?php 
    require 'utils/_db_connect.php';
    $uname = $_SESSION['uname'];
    $sql = "SELECT * FROM `blog` WHERE author = '$uname'";
    $result = mysqli_query($conn, $sql);
    $uid = $_SESSION['uid'];
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (isset($_POST['delete_post'])){
        $post_id = $_POST['post_id'];
        $uname = $_SESSION['uname'];

        //check user owns post or not 
        $chq = "SELECT * FROM `blog` WHERE `id` = '$post_id' AND author = '$uname'";
        $result = mysqli_query($conn, $chq);

        if (mysqli_num_rows($result) == 1 ){
          //delete blog
          $del = "DELETE FROM blog WHERE id = '$post_id'";
          mysqli_query($conn , $del);
        }

      }

    }




    ?>
 <div class="container mt-5">
        <h1>Blog Posts</h1>
        <div class="container " style="margin-top:70px;">
    <div class="row">
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <div class="col-lg-4">
          <article>

        
            <div class="card mt-3">
            <img src="images/<?php echo $row['img']; ?>" alt="" class="img-fluid">
            </div>
                <div class="card-header"><?php echo $row['title']; ?></div>
                <div class="card-body">
                    <?php echo $row['content']; ?>
                </div>
                <div class="card-footer">
                    <form action="deleteblog.php" method="POST">
                        <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">
                        <button type="submit" class="btn btn-danger" name="delete_post">Delete</button>
                        <a href="updateblog.php"class="btn btn-secondary" >Edit</a>
                    </form>
                </div>
          </article>
            </div>
        <?php endwhile; ?>
    </div>
  </main><!-- End #main -->

  <?php require_once 'utils/footer.php' ?>

</body>

</html>