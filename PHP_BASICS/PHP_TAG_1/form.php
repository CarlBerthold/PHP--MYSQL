<?php
$salutaion = 'Mr. X';
$maskedPassword = '******';

?>


<form action="form.php" method="post">
    <input type="text" name="username" value="<?php echo($salutaion) ?>">
    <input type="password" name="password" value="<?php echo($maskedPassword)?>">
    <button type="submit" value="login">Send</button>
</form>
