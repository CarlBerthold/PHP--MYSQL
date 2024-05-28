<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello World</h1>
    <p>This is a blog.</p>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input name="content" type="text" />
        <input type="submit" value="Submit" />
    </form>

    <?php if (isset($_POST['content'])) { ?>
        <p>Blogpost without masking the input:</p>

        <?= $_POST['content'] ?>

        <p>Blogpost with masking the input:</p>

        <?= htmlspecialchars($_POST['content']) ?>

    <?php } ?>

</body>
</html>
<a href="https://www.php.net/manual/en/function.htmlspecialchars.php">htmlspecialchars()</a>

<script>
    console.log(navigator.userAgent);
</script>