<?php

class App {

    function init() {
        $args = func_get_args();

        echo "<div class=\"container-fluid main\">";
            echo "<div class=\"row header justify-content-center justify-content-md-start\">";
                echo "<div class=\"col-8 col-md-3 text-center\">";
                echo "<h1><i class=\"fas fa-search-location icon\"></i> COVID <span class=\"text-contact\">Contact</span> <span class=\"text-tracing\">Tracing</span></h1>";
                echo "</div>";
            echo "</div>";
            echo "<div class=\"row map-row g-0\">";
                echo "<div class=\"col-12\" id=\"map\">";
                echo "</div>";
            echo "</div>";
        echo "</div>";

        echo "<script ";
        echo "src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCuj8heRtWx_X1Vd9cR_ciLphCxEkZeCwE&callback=initMap&libraries=&v=weekly\" ";
        echo "async";
        echo "></script>\"";

        echo "<div class=\"container-fluid\" id=\"contact-popup\">";
            echo "<div class=\"row d-flex justify-content-center align-items-center\">";
                echo "<div class=\"col-11 col-md-3 box\">";
                    echo "<h2 id=\"place\"></h2>";
                    echo "<p id=\"risk\"></p>";
                    echo "<div class=\"separator\"></div>";
                    echo "<p id=\"address\"></p>";
                    echo "<p id=\"suburb\"></p>";
                    echo "<p id=\"date\"></p>";
                    echo "<p id=\"arrival-time\"></p>";
                    echo "<p id=\"departure-time\"></p>";
                    echo "<p id=\"close-popup\"><i class=\"fas fa-times\"></i></p>";
                echo "</div>";
            echo "</div>";
        echo "</div>";
    }

}
    
?>