<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

    <title>ADD BOOK</title>
</head>
<body>

<?php
require('db.php');

$users = mysqli_query($con, "select * from users");

?>

<!--add book-->
<section class="container-fluid">
    <div class="add-book" id="add_book">
        <div class="alert alert-success alert-dismissible" id="success" style="display:none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
        </div>
        <form action="insert_book.php" id="add_book" method="post" enctype="multipart/form-data">
            <div class="col-6 offset-3 jumbotron mt-5 ">
                <h3 class="text-center mb-5">Add Book</h3>
                <div class="form-group">
                    <label for="book_name">Book name :</label>
                    <input type="text" id="book_name" name="name" placeholder="Please enter your book name"
                           class="form-control">
                </div>

                <div class="form-group">

                    <label for="book_author">Author:</label>
                    <select class="form-control" name="user_id" id="book_author">

                        <?php foreach ($users as $item): ?>
                            <option value=<?php echo $item['id'] ?>><?php echo $item['username'] ?></option>
                        <?php endforeach; ?>

                    </select>

                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" placeholder="Please enter the book description"
                              class="form-control" style="resize: none;height: 150px"></textarea>
                </div>
                <div class="form-group">
                    <label for="image">Choose books picture:</label>
                    <input type="file" id="image" name="image" class="form-control" placeholder="">
                </div>
                <div class="form-group">
                    <input type="submit" name="add" value="Add" id="add" class="btn btn-success form-control">
                </div>

            </div>
        </form>
    </div>
</section>

<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/custom.js"></script>
</body>
</html>
