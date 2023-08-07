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

  <title>Update Blog - HeroBiz Bootstrap Template</title>
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


</head>

<body>

  <?php require_once 'utils/_nav.php' ?>

  <?php
ob_start();
require 'utils/_db_connect.php';

$uname = $_SESSION['uname'];

$sql = "SELECT * FROM `blog` WHERE author = '$uname'";
$result = mysqli_query($conn, $sql);

$uid = $_SESSION['uid'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['post_id'];
  $title = $_POST['title'];
  $short_desc = $_POST['short_desc'];

  $content = $_POST['content'];

  if (isset($_FILES['img'])) {
    $img = $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    $img_size = $_FILES['img']['size'];
    $img_type = $_FILES['img']['type'];

    //validation



    move_uploaded_file($img_tmp, 'images/' . $img);
    //update the blog
    $update = "UPDATE `blog` SET `title` = '$title',`short_desc` = '$short_desc',`content`='$content',`img`='$img' WHERE id = '$id'";
    mysqli_query($conn, $update);
    ob_end_flush();
    exit();

  } 

}

?>



  <!-- ======= Blog Section ======= -->


  <div class="container " style="margin-top:70px;">
    <div class="row">
      <?php


      while ($row = mysqli_fetch_assoc($result)) {
        ?>

        <div class="col-lg-4">
          <article>

            <div class="card" style="width: 18rem;">
              <img src="images/<?php echo $row['img']; ?>" alt="" class="img-fluid">
            </div>

            <div class="card-body bg-yellow">
              <h2 class="">

                <?php echo $row['title']; ?>

              </h2>
              <p>
                <?php echo $row['short_desc']; ?>
              </p>
              <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                data-bs-target="#exampleModal<?php echo $row['id']; ?>">
                Edit
              </button>

            </div>




            <!-- Button trigger modal -->


          </article>

        </div>







        <!-- Modal -->
        <div class="modal fade" id="exampleModal<?php echo $row['id']; ?>" tabindex="-1"
          aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Update Blog</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form action="updateblog.php" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">
                  <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" required class="form-control" name="title" value="<?php echo $row['title']; ?>">
                  </div>
                  <!-- <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" required class="form-control" name="slug" value="<?php echo $row['slug']; ?>">
                  </div> -->
                  <div class="form-group">
                    <label for="short_desc">Short Description</label>
                    <input type="text" class="form-control" name="short_desc" value="<?php echo $row['short_desc']; ?>">
                  </div>
                  <!-- Add more form fields as needed -->

                  <div class="form-group">
                    <label for="content">Content</label>
                    <textarea class="form-control" required name="content"><?php echo $row['content']; ?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="img">Update Image</label>
                    <input required class="form-control-file" type="file" name="img">
                  </div>



              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Update</button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <?php
      }
      
      ?>
 <?php if (mysqli_num_rows($result) > 0){
                
            } else {
             echo '<h2 style="font-size:50px;">Nothing Found <h2>';
            }
?>
    </div>
  </div>




  <?php require_once 'utils/footer.php' ?>

</body>

</html>