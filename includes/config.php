<?php
  ob_start();

  $timezone = date_default_timezone_set("Asia/Singapore");

  $con = mysqli_connect("localhost:8889", "root", "root", "slotify");

  if(mysqli_connect_errno()) {
    echo "Failed to connect: " . mysqli_connect_errno();
  }
?>