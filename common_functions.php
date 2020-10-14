<?php
    /**
     * This will print array and object
     */

    function print_array($arr) {
        if (is_array($arr) || is_object($arr)) {
            echo "<pre>";
            print_r($arr);
            echo "</pre>";
        } else {
            echo $arr;
        }
        
    }
?>