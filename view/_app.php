<?php

class App {

    function init() {
        $args = func_get_args();

        echo "<div class=\"container-fluid main\">\n";
            echo "<div class=\"row header justify-content-between\">\n";
                echo "<div class=\"col-8 col-md-3 info text-center justify-content-center d-flex align-items-center\">\n";
                    echo "<h1><i class=\"fas fa-search-location icon\"></i> COVID <span class=\"text-contact\">Contact</span> <span class=\"text-tracing\">Tracing</span></h1>\n";
                echo "</div>\n";
                echo "<div class=\"col-3 col-md-1 info text-center justify-content-center d-flex align-items-center\">\n";
                    echo "<h2><i class=\"fas fa-copyright icon\"></i></i>Yohanes Mario</h2>\n";
                echo "</div>\n";
            echo "</div>\n";
            echo "<div class=\"row map-row g-0\">\n";
                echo "<div class=\"col-12\" id=\"map\">\n";
                echo "</div>\n";
            echo "</div>\n";
        echo "</div>\n";

        echo "<script ";
        echo "src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCuj8heRtWx_X1Vd9cR_ciLphCxEkZeCwE&callback=initMap&libraries=&v=weekly\" ";
        echo "async";
        echo "></script>\n";

        echo "<div class=\"container-fluid\" id=\"contact-popup\">\n";
            echo "<div class=\"row d-flex justify-content-center align-items-center\">\n";
                echo "<div class=\"col-11 col-md-3 box\">\n";
                    echo "<h2 id=\"place\"></h2>\n";
                    echo "<p id=\"risk\"></p>\n";
                    echo "<div class=\"separator\"></div>\n";
                    echo "<p id=\"address\"></p>\n";
                    echo "<p id=\"suburb\"></p>\n";
                    echo "<p id=\"date\"></p>\n";
                    echo "<p id=\"arrival-time\"></p>\n";
                    echo "<p id=\"departure-time\"></p>\n";
                    echo "<p id=\"close-popup\"><i class=\"fas fa-times\"></i></p>\n";
                echo "</div>\n";
            echo "</div>\n";
        echo "</div>\n";
    }

}
    
?>