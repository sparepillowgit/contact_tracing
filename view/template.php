<?php

class Template {

    public static function create()
    {
        // $args = [0] Template file, [~] Child arguments
        $args = func_get_args();
        $class = ucfirst($args[0]);

        require "_$args[0].php";
        $element = new $class;
        $element->init($args);
        unset($element);
    }

}

?>