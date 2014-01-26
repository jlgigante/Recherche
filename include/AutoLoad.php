<?php
function my_autoloader($class) {
    include 'include/' . $class . '.class.php';
}
spl_autoload_register('my_autoloader');