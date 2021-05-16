<?php
require 'db.php';
$id=$_POST['id'];
echo $id;
$sql='select image from books where id=$id';
$query=mysqli_query($con,$sql);
var_dump($query);
$item=mysqli_fetch_assoc($query);
unlink('images/'.$item['image']);
mysqli_query($con,"delete * from books where id=$id");
header('Location: book_info.php');