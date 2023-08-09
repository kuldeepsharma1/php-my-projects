<?php require_once 'utils/session.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Portfolio Details - HeroBiz Bootstrap Template</title>
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
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Popular Destinations</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Popular Destinations</li>
          </ol>
        </div>

      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">

          <div class="col-lg-8">
            <div class="portfolio-details-slider swiper">
              <div class="swiper-wrapper align-items-center">

                <div class="swiper-slide">
                  <img src="assets/img/services-1.jpg" alt="Paris">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/services-2.jpg" alt="Santorini">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/services-3.jpg" alt="Tokyo">
                </div>

                <div class="swiper-slide">
                  <img src="assets/img/services-4.jpg" alt="Bali">
                </div>
                <div class="swiper-slide">
                  <img src="assets/img/services-5.jpg" alt="New York City">
                </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
              <h3>Popular Destinations</h3>
              <ul>
                <li><strong>Locations</strong>: Paris, Santorini, Tokyo, Bali,New York City</li>
              </ul>
            </div>
            <div class="portfolio-description">
              <h2>Discover the World's Most Captivating Destinations</h2>
              <p>
                Immerse yourself in the charm of Paris, unwind on the stunning beaches of Santorini,
                experience the vibrant culture of Tokyo, and find tranquility amidst the beauty of Bali.
                Explore these popular destinations and create unforgettable memories.
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

   <!-- ======= Popular Destinations Section ======= -->
<section id="popular-destinations" class="popular-destinations">
  <div class="container" data-aos="fade-up">
    <div class="section-title">
      <h2>Popular Destinations</h2>
      <p>Explore these sought-after travel destinations.</p>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="card">
          <img src="assets/img/services-1.jpg" class="card-img-top" alt="Paris">
          <div class="card-body">
            <h5 class="card-title">Paris</h5>
            <p class="card-text">Experience the romance and charm of the City of Light.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="card">
          <img src="assets/img/services-2.jpg" class="card-img-top" alt="Santorini">
          <div class="card-body">
            <h5 class="card-title">Santorini</h5>
            <p class="card-text">Relax on the breathtaking beaches and savor the Aegean beauty.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="card">
          <img src="assets/img/services-3.jpg" class="card-img-top" alt="Tokyo">
          <div class="card-body">
            <h5 class="card-title">Tokyo</h5>
            <p class="card-text">Explore the fusion of tradition and modernity in Japan's vibrant capital.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="card">
          <img src="assets/img/services-4.jpg" class="card-img-top" alt="Bali">
          <div class="card-body">
            <h5 class="card-title">Bali</h5>
            <p class="card-text">Discover tranquility and natural beauty in the Indonesian paradise.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
        <div class="card">
          <img src="assets/img/services-5.jpg" class="card-img-top" alt="New York">
          <div class="card-body">
            <h5 class="card-title">New York City</h5>
            <p class="card-text">Experience the energy and diversity of the Big Apple.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Popular Destinations Section -->



  </main><!-- End #main -->
  <?php require_once 'utils/footer.php' ?>

</body>

</html>