<?php
include_once('../config.php');
$id = $_GET['ProId'];
$query = "DELETE FROM `product` WHERE `pro_id`='$id'";
$resulf = mysqli_query($conn, $query);
if (!$resulf) {
    echo "can not delete" . mysqli_error($conn);
}
include_once('index.php');
