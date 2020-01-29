<?php require('partials/head.php'); ?>

<form method="POST" action="/register">
    <label for="username">E-mail</label>
    <input name="username"><br>
    <br>
    <label for="password">Salasõna</label>
    <input type="password" name="password" id="password"> <br>
    <label for="password2">Salasõna uuesti</label>
    <input type="password" name="password2" id="password2"> <br>
    <input name="login" type="submit" value="Registreeri">
</form>