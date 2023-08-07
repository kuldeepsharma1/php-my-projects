
<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST["title"];
    session_start();
    
    $short_desc = $_POST['short_desc'];
    $slug = $_POST['slug'];
    $content = $_POST['content'];
    $author = $_SESSION['uname'];


    if (isset($_FILES['img'])) {
        $img = $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        $img_size = $_FILES['img']['size'];
        $img_type = $_FILES['img']['type'];

        //validation



        move_uploaded_file($img_tmp, 'images/' . $img);

    }

    require 'utils/_db_connect.php';

    $sql = "INSERT INTO `blog` (`title`,`short_desc`,`slug`,`content`,`img`,`author`) VALUES (?,?,?,?,?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssss", $title, $short_desc, $slug, $content, $img, $author);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    // redirect user
    header('Location: blog.php');



}


?>