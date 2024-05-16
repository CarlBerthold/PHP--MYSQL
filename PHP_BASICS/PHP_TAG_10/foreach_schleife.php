<?php

# foreach-Schleife
## einfache Form

$numbers = [ 81, 82, 83, 84, 85, 86, 87, 88, 91, 92, 93, 94, 95, 96, 97, 98, 99, ];

foreach ($numbers as $number) {
    echo $number, PHP_EOL;
}

## erweiterte Form

foreach ($numbers as $key => $value) {
    echo "[$key] => $value\n";
}

// lückenbehaftet

unset($numbers[5], $numbers[9], $numbers[10], $numbers[13]);

foreach ($numbers as $index => $value) {
    echo '[' . $index . '] => ' . $value, PHP_EOL;
}

