<?php

require './operations.php';
$result = null;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $expression = $_POST['display'];
    $result = handlePost($expression);
}

function validate(string $expression) : mixed {
    if (preg_match('/(\d+)([\+\-\*\/])(\d+)/', $expression, $matches)) {
        return $matches;
    } else {
        return 'Please provide a valid expression.';
    }
}


function handlePost(string $expression) : mixed {
    $validationResult = validate($expression);

    if(is_string($validationResult)) {
        return $validationResult;
    }

    $numberOne = floatval($validationResult[1] ?? 0);
    $numberTwo = floatval($validationResult[3] ?? 0);
    $operator = $validationResult[2] ?? '+';


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
            return 0;
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
                            The result is a positive number: <?php echo ($result <= 0) ? "No" : "Yes"; ?>
                        </p>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>