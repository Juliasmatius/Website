<title>404 - Juli's page</title>
<?php
include "static/commons/header.php";
$log = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" . "  :  " . time() . "\n";
file_put_contents("404.log", $log, FILE_APPEND);

?>
  <link rel="stylesheet" href="/static/style/index.css">

      <div class="main">
        <h1>That page doesn't exist&#x1F63F;</h1>
        <br>
        <h2>404 :3</h2>
        <br>
        <a href="/">Navigate to back to the homepage</a>
        <br>
        <u><h3>This has been logged. Your IP has not been logged.</h3></u>
        <h3>The following text was logged:</h3>
        <code><?php echo $log;?></code>
        <br>
        <br>
        <img src="https://http.cat/images/404.jpg"></img>
      </div>
    </div>
    hi
  </body>
</html>