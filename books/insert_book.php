<?php
require 'db.php';
session_start();
$uploade = 1;
$msg = '';
$name_set = false;
$name = $_POST['name'];
$user_id_set = false;
$user_id = $_POST['user_id'];
$description_set = false;
$description = $_POST['description'];
$image = $_FILES['image'];

$image_name = $image['name'];
$directory = "./images/" . $image_name;
$filetype = pathinfo($directory, PATHINFO_EXTENSION);

if ($filetype !== 'png' and $filetype !== 'jpg') {
    $uploade = 0;
}
if ($image['size'] > 5000000) {
    $uploade = 0;
}
if ($uploade == 1) {
    move_uploaded_file($image['tmp_name'], $directory);
}


if (empty($name)) {
    echo "
        <div>
        <h3 class=\"error \" style='width: 300px;height: 300px  ;line-height: 150px ; margin: 0 auto;justify-content: center'>Please Enter your username</h3>
</div>
    ";
} else {
    $name_set = true;
}
if (empty($user_id)) {
    echo "
        <div>
        <h3 class=\"error \" style='width: 300px;height: 300px  ;line-height: 150px ; margin: 0 auto;justify-content: center'>Please Enter Author</h3>
</div>
    ";
} else {
    $user_id_set = true;
}
if (empty($description)) {
    echo "
        <div>
        <h3 class=\"error \" style='width: 300px;height: 300px  ;line-height: 150px ; margin: 0 auto;justify-content: center'>Please Enter Description</h3>
</div>
    ";
} else {
    $description_set = true;
}

if ($user_id_set == true && $name_set == true && $description_set == true) {
    $sql = "insert into `books`(user_id,name, description)values ('$user_id', '$name','$description')";
    $query = mysqli_query($con, $sql);


//    $result= mysql_fetch_assoc($query);
//    var_dump($query);
    //
//    $_SESSION['name']=$result['name'];
//    $_SESSION['user_id']=$result['user_id'];
////    $_SESSION['description']=$result['description'];
//
//    echo '<script type=text/javascript>alert("Your book has been successfully added. Please check the list of books")</script>';
//    if (mysqli_query($con, $sql)) {
//        echo json_encode(array("statusCode"=>200));
//    }
//    else {
//        echo json_encode(array("statusCode"=>201));
//    }
//    mysqli_close($con);

    header('Location: book_list.php');
}
