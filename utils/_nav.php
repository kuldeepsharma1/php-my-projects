<!-- ======= Header ======= -->
<header id="header" class="header fixed-top">
  <div class="container-fluid d-flex align-items-center justify-content-between">

    <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="ipost">TRIP<span>.</span></h1>
    </a>

    <nav id="navbar" class="navbar">
      <ul>

        <li><a class="nav-link scrollto" href="index.php">Home </a>

        </li>

        <li><a class="nav-link scrollto" href="index.php#about">About</a></li>
        <?php
        if (isset($_SESSION['loggedin'])) {
          echo '<a class="nav-link scrollto" href="dash.php">Dashboared</a></li>';
        } ?>
        <li><a class="nav-link scrollto" href="popular-destination.php">Popular Destinations</a></li>
        <li><a class="nav-link scrollto" href="index.php#team">Team</a></li>
        <li><a href="blog.php">Blog</a></li>
        <li class="dropdown megamenu">
          <a href="#"><span>Explore Destinations</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li>
              <div class="megamenu-column">
                <p class="megamenu-title fw-bold text-uppercase text-primary ">Top Destinations</p>
                <a href="#">City Escapes</a>
                <a href="#">Beach Getaways</a>
                <a href="#">Mountain Retreats</a>
              </div>
            </li>
            <li>
              <div class="megamenu-column">
                <p class="megamenu-title fw-bold text-uppercase text-primary ">Travel Tips</p>
                <a href="#">Packing Essentials</a>
                <a href="#">Local Cuisine</a>
                <a href="#">Cultural Etiquette</a>
              </div>
            </li>
            <li>
              <div class="megamenu-column">
                <p class="megamenu-title fw-bold text-uppercase text-primary ">Adventure Trails</p>
                <a href="#">Hiking Expeditions</a>
                <a href="#">Scenic Cycling</a>
                <a href="#">Wildlife Safaris</a>
              </div>
            </li>
            <li>
              <div class="megamenu-column">
                <p class="megamenu-title fw-bold text-uppercase text-primary">Inspiring Stories</p>
                <a href="#">Traveler Chronicles</a>
                <a href="#">Cultural Encounters</a>
                <a href="#">Personal Journeys</a>
              </div>
            </li>
          </ul>
        </li>

        <li class="dropdown">
          <a href="#"><span>Discover More</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
          <ul>
            <li><a href="#">Explore Destinations</a></li>
            <li class="dropdown">
              <a href="#"><span>Adventure Insights</span> <i class="bi bi-chevron-down dropdown-indicator"></i></a>
              <ul>
                <li><a href="#">Hiking Escapades</a></li>
                <li><a href="#">Water Adventures</a></li>
                <li><a href="#">Wildlife Encounters</a></li>
                <li><a href="#">Cultural Expeditions</a></li>
                <li><a href="#">Thrilling Explorations</a></li>
              </ul>
            </li>
            <li><a href="#">Travel Tips</a></li>
            <li><a href="#">Inspiring Stories</a></li>
            <li><a href="#">Culinary Delights</a></li>
          </ul>
        </li>

        <li><a class="nav-link scrollto" href="index.php#contact">Contact</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle d-none"></i>
    </nav><!-- .navbar -->
    <?php
    if (isset($_SESSION['loggedin'])) {

      echo ' <a class="btn-getstarted scrollto" href="logout.php">Log Out</a>';

    } else {
      echo ' <a class="btn-getstarted scrollto" href="login.php">Login</a>';
      echo ' <a class="btn-getstarted scrollto" href="register.php">Register</a>';



    }

    ?>

  </div>
</header><!-- End Header -->