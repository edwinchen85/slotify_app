<?php
include("includes/config.php");

// session_destroy();  Logout

if(isset($_SESSION['userLoggedIn'])) {
  $userLoggedIn = $_SESSION['userLoggedIn'];
}
else {
  header("Location: register.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="assets/css/style.css">
  <title>Welcome to Slotify</title>
</head>
<body>

  <div id="nowPlayingBarContainer">

    <div id="nowPlayingBar">

      <div id="nowPlayingLeft">
        <div class="content">
          <span class="albumLink">
            <img src="https://i.ytimg.com/vi/rb8Y38eilRM/maxresdefault.jpg" class="albumArtwork">
          </span>
        </div>
      </div>

      <div id="nowPlayingCenter">

        <div class="content playerControls">

          <div class="buttons">

            <button class="controlButton shuffle" title="Shuffle button">
              <img src="assets/images/icons/shuffle.png" alt="Shuffle">
            </button>

            <button class="controlButton previous" title="Previous button">
              <img src="assets/images/icons/previous.png" alt="Previous">
            </button>

            <button class="controlButton play" title="Play button">
              <img src="assets/images/icons/play.png" alt="Play">
            </button>

            <button class="controlButton pause" title="Pause button" style="display: none">
              <img src="assets/images/icons/pause.png" alt="Pause">
            </button>

            <button class="controlButton next" title="Next button">
              <img src="assets/images/icons/next.png" alt="Next">
            </button>

            <button class="controlButton repeat" title="Repeat button">
              <img src="assets/images/icons/repeat.png" alt="Repeat">
            </button>

          </div>

          <div class="playbackBar">

            <span class="progressTime current">0.0</span>
            <div class="progressBar">
              <div class="progressBarBg">
                <div class="progress"></div>
              </div>
            </div>
            <span class="progressTime remaining">0.0</span>

          </div>

        </div>

      </div>

      <div id="nowPlayingRight">

      </div>

    </div>

  </div>

</body>
</html>
