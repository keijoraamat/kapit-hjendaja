<?php require('partials/head.php'); ?>

<form method="POST" action="/login">
    <input name="username"><br>
    <input type="password" name="password"> <br>
    <input name="login" type="submit" value="Logi sisse">

</form>

<?php
//$options = [
//    'cost' => 12,
//];
//echo password_hash("1234", PASSWORD_BCRYPT, $options);
//?> 