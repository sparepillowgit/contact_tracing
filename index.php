<?php
    require "controller/router.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php Template::create("head", "COVID Contact Tracing"); ?>
</head>
<body>
    <?php Template::create("app"); ?>
    <?php Template::create("footer"); ?>
</body>

    
</html>