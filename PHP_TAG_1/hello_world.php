<?php 
$greeting = 'Hello World!';

/* echo($greeting);
echo(1 + 1);
echo(1 . $greeting);
echo(2 * 3 . $greeting);
 */

$foo = 'bar';
$foobar = '&%foo';
$foo = 'baz';
$foobar = 'foobarbaz';

echo $foo;

?>


<!-- attention $foobar is assigned to a variable &$foo that holds baz and echoing baz egain -->
<?php 

$foo = 'bar';
$foobar = &$foo;
$foo = 'baz';
$foobar = 'foobarbaz';

echo $foo;

?>

<!-- will be interpreted bcs .php will deliver HTML with ?php for executable php code ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <h1  style="color:green;"><?php echo "Hello1" ?></h1>

    <h1 style="color:blue;"><?php echo "Hello2"; ?></h1>

    <h1 style="color:lightblue;">test</h1>

    <h1 style="color:lightgreen;"><?php echo "Hello3"; ?></h1>



    <?php 

        echo $greeting;
        echo 1 + 1;
        echo 1 . $greeting . "\n";
        echo 2 * 3 . $greeting;    
    
    ?>

    <?php
    $linkName = 'Send';
    $targetName = 'test.php';
    $placeholder = 'insert text';
    ?>


</body>
</html>
