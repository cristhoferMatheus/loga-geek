 <?php

function autoLoad($class) {
        include_once "$class.php";
}

spl_autoload_register("autoLoad");