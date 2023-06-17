<?php
include_once('../config.php');
$ID = ($_REQUEST['Proid']) ? $_REQUEST['Proid'] : "";
$folder = '../images/';

$name1 = isset($_POST['txtname']) ? $_POST['txtname'] : "";
$image1 = isset($_FILES['files']['name']) ? $_FILES['files']['name'] : "";
$size1 = isset($_POST['txtsize']) ? $_POST['txtsize'] : "";
$price1 = isset($_POST['txtprice']) ? $_POST['txtprice'] : "";
$point1 = isset($_POST['txtpoint']) ? $_POST['txtpoint'] : "";

move_uploaded_file($_FILES['files']['tmp_name'], $folder . $image1);
$query = "UPDATE  `product`  SET  `pro_name`='$name1', `img`='$image1', `size`='$size1', `price`='$price1', `point`='$point1'WHERE `pro_id`='$ID";
$resulf = mysqli_query($conn, $query);
if (!$resulf) {
    echo "can update" . mysqli_error($conn);
}
include_once('index.php');
