<?php
include ('auth_session.php');
require('db.php');
//include("auth_session.php");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>dashboard</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
<div class="container-fluid">
    <div class="row m-o mt-5 p-5">
        <div class="col-4 offset-4 jumbotron">
                <div class="form-group">
                    <h3 class="text-center mb-5">HEY,  <?php echo $_SESSION['username']?> !</h3>
                    <h6 class="text-center mb-5">welcome to your page. it`s your accounts dashboard</h6>
                </div>
                <div class="form-group">
                    <div class="mt-3 ">
                        <a href="../books/add_books.php" class="btn btn-warning btn-block">add books</a>
                    </div>
                    <div class="mt-3 ">
                        <a href="../books/book_list.php" class="btn btn-info btn-block">book list</a>

                    </div>
                    <div class="mt-3 ">
                        <a href="./logout.php" class="btn btn-danger btn-block">log out</a>
                    </div>

                </div>
        </div>
    </div>
</div>



<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
