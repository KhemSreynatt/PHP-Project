<!DOCTYPE html>
<html lang="en">
<?php
include_once('../config.pnp');
$ID = isset($_REQUEST['Proid']) ? $_REQUEST['Proid'] : '';
$query = "SELECT * FROM `product` WHERE `pro_id`='$ID'";
$resulf = mysqli_query($conn, $query);
$row = mysqli_fetch_array($resulf);

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if (isset($_POST['btndelete'])) {
    include_once('delete.php');
} else if (isset($_POST['tbnupdate.php'])) {
    include_once('update.php');
} else {
}
?>

<body>
    <form method="post" action="<?php echo $_SELF; ?>" enctype="multipart/form-data">
        Name : <input type="text" name="txtname" value="<?php echo $row['pro_name']; ?>">
        <br;>
            Photo: <img scr="../images/<?php echo $row['img']; ?>" width=100>
            <input type="file" name="filse"><br />
            Size: <?php echo $row['size']; ?>
            <select name="txtsize">
                <option>large</option>
                <option>Medium</option>
                <option><small></small></option>
            </select><br />
            Price: <input type="text" name="txtprice" value="<?php echo $row['price']; ?>">$<br />
            Point:<input type="text" name="txtprice" value="<?php echo $row['point']; ?>">$<br />
</body>

</html>