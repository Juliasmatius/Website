<?php
if (isset($_SERVER['X-Forwarded-For'])) {
  $ip = $_SERVER['X-Forwarded-For'];
} else {
  $ip = $_SERVER['REMOTE_ADDR'];
}
echo $ip;

if (str_contains(file_get_contents("log.log"), $ip."\n")) {
  echo "found";
} else {
  echo "not found"; 
  file_put_contents('logs.log', $ip."\n".PHP_EOL , FILE_APPEND | LOCK_EX);
}
?>

<link rel="stylesheet" href="/static/commons/style.css">
<div class="popup" id="popup">
  <span>This website collects IP addresses for analytics purposes. By continuing to use this site, you agree to our <a href="#">privacy policy</a>.</span>
  <span class="popup-close" onclick="closePopup()">✖</span>
</div>
<script>
  function closePopup() {
    document.getElementById('popup').style.display = 'none';
    document.cookie = "popupClosed=true";
  }
  window.onload = function() {
    var popup = document.getElementById('popup');
    if (!document.cookie.includes("popupClosed")) {
      popup.style.display = 'block'; 
    } else {
      popup.style.display = "none";
    }
  };
</script>