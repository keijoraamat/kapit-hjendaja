<nav>
    <table>
        <td><a href="/">Avaleht</a></td>
        <td><a href="/about">Meist</a></td>
        <td><a href="/contact">Kontakt</a></td>
        <td><a href="/countries">Riigid</a></td>
       
   
    <?php if ($_SESSION["username"]) : ?>
    Sisse logitud kui: <b>
    <?php 
    echo $_SESSION["username"]; 
    ?> </b>
     <a href="/logout">logi välja</a>
     <?php endif; ?>
    <?php if (!$_SESSION["username"]) : ?>
        <td> <a href="/register">Registreeri</a> /
        <a href="/login">logi sisse</a></td>
     <?php endif; ?>
     </table>
</nav>