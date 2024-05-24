<?php

$content = file_get_contents(__DIR__ .'/assets/blindtext 1.txt');
$paragraphs = explode("\r\n", $content); // Split the content into paragraphs

$headline = array_shift($paragraphs); // Get the first paragraph as the headline by removing it from the array
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1><?= $headline ?></h1>

    <?php foreach ($paragraphs as $paragraph): ?>
        <p><?= $paragraph ?></p> <!-- Display each paragraph in a <p> tag -->
    <?php endforeach; ?>

</body>
</html>
