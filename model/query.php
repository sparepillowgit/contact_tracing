<?php

class Query {

    public static function exec() {
        // $args = [0] Model file, [~] Child arguments
        $args = func_get_args();
        $class = ucfirst($args[0]);

        require "pdo.php";
        require "_$args[0].php";

        $class = new $class();
        $data = $class->query($pdo);

        return $data;
    }

}

?>