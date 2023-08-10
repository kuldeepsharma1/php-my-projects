

<?php
$err = false;
$success = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    require 'utils/_db_connect.php';
    $email = $_POST["email"];
    $uname = $_POST["uname"];
    $pass = $_POST["pass"];
    $cpass = $_POST["cpass"];

    //check whether username already in table
    $existSql1 = "SELECT * FROM `users`where email='$email'";
    $existSql2 = "SELECT * FROM `users`where uname='$uname'";
    $result1 = mysqli_query($conn, $existSql1);
    $result2 = mysqli_query($conn, $existSql2);
    $numExistRows1 = mysqli_num_rows($result1);
    $numExistRows2 = mysqli_num_rows($result2);
    
    if ($numExistRows2 > 0) {
        $showError = " Username Already Existed";
    }
   else if ($numExistRows1 > 0) {
        $showError = " Email Already Existed";
    }else{
        if ($pass == $cpass) {
            $hash = password_hash($pass, PASSWORD_DEFAULT);


            $sql = "INSERT INTO `users` ( `uname`,`email`, `passwd`, `date`) VALUES ('$uname' ,'$email', '$hash', current_timestamp())";

            $result = mysqli_query($conn, $sql);
            if ($result) {
                $success = true;
            }else{
                $err = true;
            }
        } else {
            $showError = "Passwords do not Match ";
        }
    }







}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Register</title>
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
<?php require_once 'utils/session.php' ?>
    <?php require_once 'utils/_nav.php' ?>













    <main id="main">
        <div class="container register-form " id="register" style="margin-top:70px;margin-bottom:50px;">
       <!-- error block -->
       <?php
    if ($success) {
        echo  ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sucess</strong> Your Account is created sucessfully and You can log in now
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    }
    if ($showError) {
        echo  ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Fail</strong> ' . $showError . '
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
    }
    if ($err) {
        echo  ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 <strong>Fail</strong> Application Error
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
    }


    ?>
            <form action="register.php" method="POST">
            <div class="mb-3">
                    <label for="exampleInputEmail12" class="form-label">Create a Unique Username</label>
                    <input type="text" name="uname" class="form-control" id="exampleInputEmail1" 
                        aria-describedby="emailHelp" required>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
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
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                    <input type="password" name="cpass" class="form-control" id="exampleInputPassword1" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>


        </div>

    </main>

    <?php require_once 'utils/footer.php' ?>


</body>

</html>