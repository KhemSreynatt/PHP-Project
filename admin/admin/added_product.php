<?php
include_once('../config.php');
$folder = '../images/';
$name = $_POST['txtname'];
$img = $_FILES['files']['name'];
$size = $_POST['txtsize'];
$price = $_POST['txtprice'];
$point = $_POST['txtpoint'];
move_uploaded_file($_FILES['files']['tmp_name'], $folder . $img);
$query = "INSERT INTO `product`(`pro_id`, `pro_name`, `img`, `size`, `price`, `point`)
         VALUES (Null,'$name','$img','$size','$price','$point')";
$resulf = mysqli_query($conn, $query);
if (!$resulf) {
    echo "can not insert" . mysqli_error($conn);
} else {
    echo "success add";
}
