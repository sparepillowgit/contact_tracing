<?php

class Head {

    function init() {
        // $args = [0][1] Page title
        $args = func_get_args();
        $title = $args[0][1];

        echo "\n<meta charset=\"UTF-8\">\n";
        echo "<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">\n";
        echo "<meta http-equiv=\"cache-control\" content=\"no-cache\">\n";
        echo "<meta http-equiv=\"expires\" content=\"0\">\n";
        echo "<meta http-equiv=\"pragma\" content=\"no-cache\">\n";
        echo "<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\n";;
        echo "<meta name=\"description\" content=\"COVID-19 contact tracing map for Queensland, Australia.\">\n";
        echo "<meta name=\"author\" content=\"Yohanes Mario\">\n";
        echo "<link rel=\"icon\" href=\"favicon.ico\" type=\"image/x-icon\">\n";
        echo "<script src=\"https://kit.fontawesome.com/199e4cee19.js\"></script>\n";
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">\n";
        echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
        echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Rubik&family=Yellowtail&display=swap\" rel=\"stylesheet\">\n";
        echo "<link href=\"css/style.css?version=1.0\" rel=\"stylesheet\">\n";
        echo "<script src=\"https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js\"></script>\n";
        echo "<script src=\"js/main.js?version=1.0\"></script>\n";
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