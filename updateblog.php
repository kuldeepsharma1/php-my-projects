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
        <!-- ======= Blog Section ======= -->
        <section id="blog" class="blog">
          <div class="container" data-aos="fade-up">

            <div class="row g-5">

              <div class="col-lg-8">

                <div class="row gy-4 posts-list">


                  <?php
                  require 'utils/_db_connect.php';
                  $sql = "SELECT * FROM `blog`";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="col-lg-6">
                      <article class="d-flex flex-column">

                        <div class="post-img">
                          <img src="images/<?php echo $row['img']; ?>" alt="" class="img-fluid">
                        </div>

                        <h2 class="title">
                          <a href="blog-details.php">
                            <?php echo $row['title']; ?>
                          </a>
                        </h2>

                        <div class="meta-top">
                          <ul>
                            <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                href="blog-details.php">Author Name</a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a
                                href="blog-details.php"><time datetime="2022-01-01">Jan 1, 2022</time></a></li>
                            <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a
                                href="blog-details.php">12 Comments</a></li>
                          </ul>
                        </div>

                        <div class="content">
                          <p>
                            <?php echo $row['short_desc']; ?>
                          </p>
                        </div>

                        <div class="read-more mt-auto align-self-end">
                          <a data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $row['slug']; ?>"
                            href="/php-my-projects/updateblog.php?slug=<?php echo $row['slug']; ?>">Edit</a>
                        </div>

                      </article>
                    </div>

                    <?php
                  }
                  ?>


                  <?php
                  require 'utils/_db_connect.php';
                  $sql = "SELECT * FROM `blog`";
                  $result = mysqli_query($conn, $sql);
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '          <!-- Modal -->
                    <div class="modal fade" id="exampleModal' . $row['slug'] . ' " tabindex="-1" aria-labelledby="exampleModalLabel' . $row['slug'] . ' " aria-hidden="true">
                      <div class="modal-dialog">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel' . $row['slug'] . ' ">Update Blog </h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">';
                    if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['slug'])) {
                      echo '

      <form action="updateblog.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Title</label>
        <input type="text" class="form-control" name="title" value="title" id="exampleInputEmail1"
          aria-describedby="emailHelp">

      </div>
      <div class="mb-3">
        <label for="exampleInputPassword2" class="form-label">Short description</label>
        <input type="text" class="form-control" name="short_desc" value="short_desc" id="exampleInputPassword2">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Slug</label>
        <input type="text" class="form-control" name="slug" value="slug" id="exampleInputPassword1">
      </div>
      <div class="form-floating">
        <textarea class="form-control" placeholder="Write Your Content here" name="content" value="content"
          id="floatingTextarea2" style="height: 100px"></textarea>
        <label for="floatingTextarea2">Blog Content</label>
      </div>

      <div>
        <label for="formFileLg" class="form-label">Large file input example</label>
        <input class="form-control form-control-lg" id="formFileLg" name="img" type="file">
      </div>
      
    
      </div>';
                    }

                    echo ' <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </form>
      </div>
    </div>
  </div>
</div>
        ';

                  }
                  ?>

                  <!-- End post list item -->






                </div><!-- End blog posts list -->

                <div class="blog-pagination">
                  <ul class="justify-content-center">
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                  </ul>
                </div><!-- End blog pagination -->

              </div>


            </div>

          </div>
        </section><!-- End Blog Section -->


      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->


  </main><!-- End #main -->

  <?php require_once 'utils/footer.php' ?>

</body>

</html>