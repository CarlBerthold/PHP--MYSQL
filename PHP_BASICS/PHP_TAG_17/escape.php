<?php

function escape(string $input): string
{
    return htmlspecialchars(strip_tags($input), ENT_QUOTES);
}
?>

<html>

<body>
    <h1>Hello World</h1>
    <p>This is a blog.</p>

    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
        <input name="content" type="text" />
        <input type="submit" value="Submit" />
    </form>

    <?php if (isset($_POST['content'])): ?>
        <p>Blogpost without masking the input:</p>

        <?= $_POST['content'] ?>

        <p>Blogpost with masking the input:</p>

        <?= escape($_POST['content']) ?>

    <?php endif; ?>

</body>

</html>