<?php
require_once __DIR__ . '/inc/functions.inc.php';

$result = 'Please enter valid numbers';

if($_POST && validateInput($_POST)) {
    $result = calculate(
        (float) $_POST['numberOne'] == (int) $_POST['numberOne'] ? (int)$_POST['numberOne'] : (float)$_POST['numberOne'],
        (float) $_POST['numberTwo'] == (int) $_POST['numberTwo'] ? (int)$_POST['numberTwo'] : (float)$_POST['numberTwo'],
        $_POST['operator']
    );
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
    <link href="css\tailwindcss.css" rel="stylesheet">
    <title>Calculator</title>
</head>

<body>
    <main class="mx-auto">
        <div class="container mx-auto">
            <div class="flex justify-center">
                <div class="w-full max-w-xs">
                    <form
                        action="<?= $_SERVER['PHP_SELF'] ?>"
                        class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4"
                        method="POST"
                    >
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="numberOne">
                                first Number
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="numberOne"
                                name="numberOne"
                                type="number"
                                step="0.01"
                                placeholder="Enter the first Number"
                            />
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="numberTwo">
                                second Number
                            </label>
                            <input
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="numberTwo"
                                name="numberTwo"
                                type="number"
                                step="0.01"
                                placeholder="Enter the second Number"
                            />
                        </div>
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="operator">
                                Operator
                            </label>
                            <select
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                id="operator"
                                name="operator"
                            >
                                <option value="+">+</option>
                                <option value="-">-</option>
                                <option value="*">*</option>
                                <option value="/">/</option>
                            </select>
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover :bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                                Calculate Result </button>
                        </div>
                    </form>
                    <p class="text-center text-gray-700 text-xl">
                        Result: <?php echo $result ?>
                    </p>

                    <p class="text-center text-gray-700 text-xl mt-4">
                        <?php
                        if (is_numeric($result)) {
                            echo $result >= 0 ? 'The result is a positive number' : 'The result is a negative number';
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>

</html>