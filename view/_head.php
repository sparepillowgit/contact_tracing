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
        echo "<link rel=\"manifest\" href=\"manifest.json\">\n";
        echo "<link rel=\"icon\" href=\"favicon.png\" type=\"image/x-icon\">\n";
        echo "<link rel=\"apple-touch-icon\" href=\"images/pwa-icon-152.png\">\n";
        echo "<meta name=\"theme-color\" content=\"black\">\n";
        echo "<meta name=\"apple-mobile-web-app-capable\" content=\"yes\">\n";
        echo "<meta name=\"apple-mobile-web-app-status-bar-style\" content=\"black\">\n";
        echo "<meta name=\"apple-mobile-web-app-title\" content=\"CT QLD\">\n";
        echo "<link href=\"images/splashscreens/iphone5_splash.png\" media=\"(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/iphone6_splash.png\" media=\"(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/iphoneplus_splash.png\" media=\"(device-width: 621px) and (device-height: 1104px) and (-webkit-device-pixel-ratio: 3)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/iphonex_splash.png\" media=\"(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/iphonexr_splash.png\" media=\"(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/iphonexsmax_splash.png\" media=\"(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/ipad_splash.png\" media=\"(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/ipadpro1_splash.png\" media=\"(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/ipadpro3_splash.png\" media=\"(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<link href=\"images/splashscreens/ipadpro2_splash.png\" media=\"(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2)\" rel=\"apple-touch-startup-image\">\n";
        echo "<meta name=\"msapplication-TileImage\" content=\"images/pwa-icon-144.png\">\n";
        echo "<meta name=\"msapplication-TileColor\" content=\"#000000\">\n";
        echo "<script src=\"https://kit.fontawesome.com/199e4cee19.js\"></script>\n";
        echo "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">\n";
        echo "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">\n";
        echo "<link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>\n";
        echo "<link href=\"https://fonts.googleapis.com/css2?family=Rubik&family=Yellowtail&display=swap\" rel=\"stylesheet\">\n";
        echo "<link href=\"css/style.css\" rel=\"stylesheet\">\n";
        echo "<script src=\"https://unpkg.com/@googlemaps/markerclustererplus/dist/index.min.js\"></script>\n";
        echo "<script src=\"js/main.js\"></script>\n";
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