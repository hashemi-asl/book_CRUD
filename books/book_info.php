<?php
require "db.php";
$query = mysqli_query($con, "SELECT * FROM books INNER JOIN users ON books.user_id=users.id ");

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>book info</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">

</head>
<body>
<section class="container-fluid">
    <div class="show">
        <div class="row m-0 mt-5 p-6">
            <div class="col-10 offset-1 ">
                <h3 class="text-center m-0 mt-1 mb-5"> Book Info</h3>
                <table class="table table-hover table-striped">
                    <tr>
                        <th>id</th>
                        <th>book name</th>
                        <th>author name</th>
                        <th>description</th>
                        <th>image</th>
                        <th>update</th>
                        <th>delete</th>
                    </tr>
                    <!--                    --><?php
                    //                    foreach ($query as $item) {
                    //                        echo($item['id'] . "\t");
                    //                        echo "<br>";
                    //
                    //                        echo($item['name'] . "    ");
                    //                        echo "<br>";
                    //
                    //                        echo($item['user_id'] . "    ");
                    //
                    //                        echo "<br>";
                    //                        echo($item['username'] . "    ");
                    //                        echo "<br>";
                    //
                    //                        echo($item['national_code']);
                    //
                    //
                    //                        echo "<hr>";
                    //                    }
                    //                    ?>
                    <?php foreach ($query as $item): ?>

                        <tr>
                            <td><?php echo $item['id'] ?></td>
                            <td><?php echo $item['name'] ?></td>
                            <td><?php echo $item['username'] ?></td>
                            <td><?php echo $item['description'] ?></td>
                            <td><img src="./images/<?php echo $item['image'] ?>" width="50px" height="50px" alt=""></td>
                            <td><a href="./update_book.php" class="btn btn-warning">edit</a></td>
                            <td>
                                <form action="./delete_book.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
                                    <input type="submit" value="delete" class="btn btn-danger">
                                </form>
                            </td>

                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>

        </div>
    </div>
</section>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/custom.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</body>
</html>
