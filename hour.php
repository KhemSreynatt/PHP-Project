<?php
date_default_timezone_set("Asia/bangkok");
$time = date("h:i:s");
$h = date("h");
$am_pm = $h >= 12 ? "pm" : "am";
echo $time . " | " . $am_pm;
?>