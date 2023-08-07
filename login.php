<?php require_once 'utils/session.php' ?>
<?php

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
} else {
    header('Location: index.php');
    exit;
}

?>
<?php

$err = false;
$success = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'utils/_db_connect.php';
    $email = $_POST["email"];
    $pass = $_POST["pass"];

    $sql = "Select * from users where email='$email'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);



    if ($num == 1) {
        while ($row = mysqli_fetch_assoc($result)) {

            if (password_verify($pass, $row['passwd'])) {
                $success = true;


                $_SESSION['loggedin'] = true;
                $_SESSION['uname'] = $row['uname'];
                $_SESSION['uid'] = $row['id'];

                header("Location: index.php");

                //echo"$unumber";
                // echo "$uname";
            } else {
                $showError = "Invalid Credentials";
            }
        }

    } else {
        $showError = "Email Not Exist";
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>HeroBiz Bootstrap Template - Home 1</title>
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
    <link href="./assets/css/main.css" rel="stylesheet">

</head>

<body>

    <?php require_once 'utils/_nav.php' ?>

    <main id="main">
        <div class="container register-form " id="register" style="margin-top:70px;margin-bottom:50px;">
            <!-- error block -->
            <?php
            if ($success) {
                echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucess</strong> Login sucessfully 
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
            }
            if ($showError) {
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Fail</strong> ' . $showError . '
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
            }
            if ($err) {
                echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Fail</strong> Application Error
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
            }


            ?>
            <form action="login.php" method="POST">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword" class="form-label">Password</label>
                    <input type="password" name="pass" class="form-control" id="exampleInputPassword" required>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>

    </main>

    <?php require_once 'utils/footer.php' ?>


</body>

</html>