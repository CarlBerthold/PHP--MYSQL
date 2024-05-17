<?php

require './operations.php';
$result = null;


/* if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // check the input if set or null
    // turn string into float
    // save it to variableS
    $numberOne = floatval($_POST['numberOne'] ?? 0);
    $numberTwo = floatval($_POST['numberTwo'] ?? 0);
    $operator = $_POST['operator'] ?? '+';

    // checks for following operators
    if ($operator === '+') {
        $result = sum($numberOne, $numberTwo); 
    } elseif ($operator === '-') {
        $result = subtract($numberOne, $numberTwo);
    } elseif ($operator === '*') {
        $result = multiply($numberOne, $numberTwo);
    } elseif ($operator === '/') {
        $result = divide($numberOne, $numberTwo);
    }
}
 */

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['display'];
    $result = handlePost($expression);
}

function handlePost($expression){
     // check for patterns; digit, operator, digit
    // returns array of matches
    validate();
    preg_match('/(\d+)([\+\-\*\/])(\d+)/', $expression, $matches);

    $numberOne = floatval($matches[1] ?? 0);
    $numberTwo = floatval($matches[3] ?? 0);
    $operator = $matches[2] ?? '+';


    switch ($operator) {

        case '+':
            return $result = sum($numberOne, $numberTwo);
        case '-':
            return $result = subtract($numberOne, $numberTwo);
        case '*':
            return $result = multiply($numberOne, $numberTwo);
        case '/':
            return $result = divide($numberOne, $numberTwo);
        default:
            return 'Invalid operator';
    }
}
?>
<?php include './head.php'; ?>
    <body>
        <main class="mx-auto">
            <div class="container mx-auto">
                <div class="flex justify-center">
                    <div class="w-full max-w-xs">
                        <?php include './form.php'; ?>
                        <p class="text-center text-gray-700 text-xl">
                            Result: <?php echo isset($result) ? $result : "No result yet"; ?>
                        </p>

                        <p class="text-center text-gray-700 text-xl mt-4">
                            The result is a positive number: <?php echo ($result < 0) ? "No" : "Yes"; ?>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>