<?php
if (date('m') == 6) { // 6 is the month number for June
    header("Content-type: text/css; charset=utf-8");
    ?>
    body {
        background-image: linear-gradient(45deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('https://upload.wikimedia.org/wikipedia/commons/4/48/Gay_Pride_Flag.svg');
    }
    <?php
}
?>