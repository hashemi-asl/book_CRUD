
<?php
require 'db.php';
$query=mysqli_query($con,"SELECT * FROM books INNER JOIN users ON books.user_id=users.id ");
//foreach ($query as $item) {
//   echo($item['id'] . "\t");
////    echo "<br>";
////
////    echo($item['name'] . "    ");
////    echo "<br>";
////
////    echo($item['user_id'] . "    ");
////
////    echo "<br>";
////    echo($item['username'] . "    ");
////    echo "<br>";
////
////    echo($item['national_code']);
////
////
////    echo "<hr>";
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book list</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
<section class="container-fluid">
    <div class="show">
        <div class="row m-0 mt-5 p-6">
            <div class="col-4 offset-4 jumbotron">
              <h3 class="text-center m-0 mt-1 mb-5"> Book List</h3>
                <ul class="list-group">
                    <?php foreach ($query as $item): ?>
                            <li class="list-group-item disabled"><?php echo $item['name'] ?></li>
                    <?php endforeach;?>
                </ul>
                <a href="./book_info.php" class="btn btn-info w-100 mt-3">more_info</a>
            </div>
        </div>
    </div>
</section>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>

