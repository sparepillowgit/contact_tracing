<?php

class Head {

    function init($args) {
        // $args = [1] Page title

        echo "\n<meta charset=\"UTF-8\">\n";
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";
        echo "<meta name=\"description\" content=\"COVID-19 contact tracing map for Queensland, Australia.\">\n";
        echo "<meta name=\"author\" content=\"Yohanes Mario\">\n";
        echo "<link rel=\"icon\" href=\"images/favicon.png\">\n";
        echo "<script src=\"https://kit.fontawesome.com/199e4cee19.js\"></script>\n";
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">\n";
        echo "<link href=\"css/styles.css\" rel=\"stylesheet\">\n";
        echo "<script src=\"https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js\"></script>\n";
        echo "<script src=\"js/scripts.js\"></script>\n";
        echo "<title>$args[1]</title>\n";
    }

}

?>

<script>
    var contacts = <?php echo json_encode($contacts = Query::exec("contacts")); ?>;
</script>