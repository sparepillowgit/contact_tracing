<?php

class Head {

    function init() {
        // $args = [0][1] Page title
        $args = func_get_args();
        $title = $args[0][1];

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
        echo "<title>$title</title>\n";
        echo "<!-- Global site tag (gtag.js) - Google Analytics -->\n";
        echo "<script async src=\"https://www.googletagmanager.com/gtag/js?id=G-2Y7MRF2TB1\"></script>\n";
        echo "<script>\n";
        echo "window.dataLayer = window.dataLayer || [];\n";
        echo "function gtag(){dataLayer.push(arguments);}\n";
        echo "gtag('js', new Date());\n";
        echo "gtag('config', 'G-2Y7MRF2TB1');\n";
        echo "</script>\n";
    }

}

?>

<script>
    var contacts = <?php echo json_encode($contacts = Query::exec("contacts")); ?>;
</script>