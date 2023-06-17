<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Menu Name</th>
            <th>Photo</th>
            <th>Price</th>
            <th>Size</th>
            <th>Point</th>
        </tr>
        <?php
        include_once('../config/php');
        $query = "SELECT * FROM `product` ORDER BY `pro_id`";
        $reselt = mysqli_query($con, $query);
        if (mysqli_num_rows($reselt) > 0) {
            while ($row = mysqli_fetch_array($reselt)) {
        ?>
                <tr>
                    <td><?php echo $row['$pro_id']; ?></td>
                    <td><?php echo $row['$pro_name']; ?></td>
                    <td><img src="/images/<?php echo $row['img']; ?> " width=100></td>
                    <td><?php echo $row['$size']; ?></td>
                    <td><?php echo $row['$price']; ?></td>
                    <td><?php echo $row['$proint']; ?></td>
                </tr>
        <?php

            }
        }
        ?>

    </table>
</body>

</html>