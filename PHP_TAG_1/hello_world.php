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
<!-- will be interpreted bcs .php will deliver HTML with <?php for executable php code ?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>
<body>
    <?php echo "Hello" ?>

    <h1><?php echo "Hello"; ?></h1>
    <h1>test</h1>
    <h1><?php echo "Hello"; ?></h1>
</body>
</html>
