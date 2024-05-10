<?php
$customerName = 'John Doe';
$orderValue = 237.30;
$discount = 100.00;
$result = $orderValue - $discount;


echo "Customer: $customerName" . PHP_EOL . "Order Value: $orderValue" . PHP_EOL . "Discount: $discount" . PHP_EOL . "Total: " . $result . PHP_EOL;

// echo "Customer: $customerName" . PHP_EOL . "Order Value: $orderValue" . '$'. PHP_EOL . "Discount: $discount" . '$' . PHP_EOL . "Total: " . ($orderValue - $discount) . '$' . PHP_EOL;