<?php

// if it is sent with AJAX
if(isset($_SERVER['HTTP_X_REQUESTED_WITH'])) {
  // echo "CAME FROM AJAX";
  include("includes/config.php");
  include("includes/classes/Artist.php");
  include("includes/classes/Album.php");
  include("includes/classes/Song.php");
}
else {
  include("includes/header.php");
  include("includes/footer.php");

  $url = $_SERVER['REQUEST_URI'];   // e.g  '/index.php'
  echo "<script>openPage('$url')</script>";
  exit();   // prevent from loading remaining of the page
}

?>
