<?php
function my_autoload($class_name)
{
    $file = 'src/Entities/' . $class_name . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}
spl_autoload_register('my_autoload');

// $computer = new Computer('SSD');

// Laptop::hello(); // statischer Aufruf
// Computer::hello();

$laptop = new Laptop('HDD');

// echo $laptop->gebStatusAus();
