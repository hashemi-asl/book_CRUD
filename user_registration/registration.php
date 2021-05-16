<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>register page</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>

<?php
require('db.php');
//vaghti form submit shod, insert values into the db

if (isset($_REQUEST['username'])) {
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con, $username);
    $national_code = stripslashes($_REQUEST['national_code']);
    $national_code = mysqli_real_escape_string($con, $national_code);

    $query = "insert into `users`(username,national_code)values ('$username','$national_code')";

    $result = mysqli_query($con, $query);
//    var_dump($result);
//
//    if (!$con) {
//        die("Connection failed: " . mysqli_connect_error());
//    }
//
//    $sql = "INSERT INTO users (username, national_code)
//VALUES ('TEST1', 123)";
//
//    if (mysqli_query($con, $sql)) {
//        echo "New record created successfully";
//    } else {
//        echo "Error: " . $sql . "<br>" . mysqli_error($con);
//    }

    if ($result) {
        echo "
    <div class=\"container-fluid\">
        <div class=\"row m-o mt-5 p-5\">
            <div class=\"col-4 offset-4 jumbotron\">
                <div class=\"form-group\">
                    <h3 class='text-center'>you registered successfully </h3><br>
                    <div class='text-center'>
                        <a href='./login.php' class='btn btn-primary '>Login</a>
                    </div>
                    <div class='text-center mt-5'>
                        <p class=\"link\"> please click here to <a href=\"registration.php\">Registration</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        ";

    } else {
        echo "
    <div class=\"container-fluid\">
        <div class=\"row m-o mt-5 p-5\">
            <div class=\"col-4 offset-4 jumbotron\">
                <div class=\"form-group\">
                    <h3 class=\"text-center mb-5\">required fields are missing . </h3><br>
                       <div class='text-center'>
                            <p class=\"link\"> please click here to <a href=\"registration.php\">Registration</a></p>
                        </div>
                </div>
            </div>
        </div>
    </div>
        ";
    }
} else {
    ?>
    <section class="container-fluid">
        <div class="row m-0 mt-5 p-5">
            <div class="col-4 offset-4 jumbotron">
                <form action="" method="post" class="form">
                    <div class="form-group">
                        <h2 class="text-center mb-5">Registration</h2>
                    </div>
                    <div class="form-group">
                        <input type="text" class="login-input form-control mt-5" name="username"
                               placeholder="please enter your username" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="national_code form-control mt-4" name="national_code"
                               placeholder="please enter your national code" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Register"
                               class="login-button btn btn-success mt-4 form-control">
                    </div>
                    <div class="form-group">
                        <p class="link text-center">already have an account? <a href="login.php " class="" >Click to Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <?php
}
?>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>