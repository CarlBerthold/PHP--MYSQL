<?php

$numbers = [81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99];

// Set the internal pointer to the first element
reset($numbers);

while ($current = current($numbers)) {
    echo "Current element: $current\n";
    
    // Move the internal pointer to the next element
    next($numbers);
}

// Set the internal pointer to the last element
end($numbers);

// Get the last element
$last = current($numbers);
echo "Last element: $last\n";
