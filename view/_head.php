<?php

class Head {

    function init($args) {
        // $args = [1] Page title

        echo "<meta charset=\"UTF-8\">";
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">";
        echo "<meta charset=\"utf-8\">";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">";
        echo "<meta name=\"description\" content=\"Brisbane-based full-stack web developer. Proficient with HTML, CSS, JavaScript, PHP, SQL, WordPress, WooCommerce, Adobe CC.\">";
        echo "<meta name=\"author\" content=\"Yohanes Mario\">";
        echo "<link rel=\"icon\" href=\"images/favicon.png\">";
        echo "<script src=\"https://kit.fontawesome.com/199e4cee19.js\"></script>";
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">";
        echo "<link href=\"css/styles.css\" rel=\"stylesheet\">";
        echo "<script src=\"https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js\"></script>";
        echo "<script src=\"js/scripts.js\"></script>";
        echo "<title>$args[1]</title>";
    }

}

?>

<script>
    var contacts = <?php echo json_encode($contacts = Query::exec("contacts")); ?>;
</script>