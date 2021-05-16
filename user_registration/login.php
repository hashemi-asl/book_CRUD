<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Login</title>
</head>
<body>
<?php
require('db.php');
session_start();
if (isset($_POST['username'])) {
    $username=stripslashes($_REQUEST['username']);
    $username=mysqli_real_escape_string($con,$username);
    $national_code=stripslashes($_REQUEST['national_code']);
    $national_code=mysqli_real_escape_string($con,$national_code);
    $query="SELECT * FROM `users` WHERE username='$username' AND national_code='$national_code'";

    $result=mysqli_query($con,$query) or die(mysql_error());

    $rows=mysqli_num_rows($result);

    if ($rows==1) {
        $_SESSION['username']=$username;
        //redirect be dashboard
        header('Location: dashboard.php');
    }else{
        echo"
            <div class=\"container - fluid\">
        <div class=\"row m - o mt - 5 p - 5\">
            <div class=\"col - 4 offset - 4 jumbotron\">
                <h3 class='text-center'> Incorrect Username/national code.</h3><br/>
                <p class='link text-center'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>\";
               
            </div>
        </div>
    </div>
        ";
    }

}else{
    ?>
    <section class="container-fluid">
        <div class="row m-0 mt-5 p-5">
            <div class="col-4 offset-4 jumbotron">
<!--                <form action=" ./dashboard.php" method="post" class="form" name="login">-->
                <form action="" method="post" class="form" name="login">
                    <div class="form-group">
                        <h2 class="text-center mb-5">Login</h2>
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
                        <input type="submit" name="submit" value="Login"
                               class="login-button btn btn-success mt-4 form-control">
<!--                        <a href="dashboard.php">login</a>-->
                    </div>
                    <div class="form-group">
                        <p class="link text-center">Don`t have an account? <a href="registration.php " class="" >Register Now</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>
}

<?php
}
?>
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
