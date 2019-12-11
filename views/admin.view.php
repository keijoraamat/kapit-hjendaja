<?php require('partials/head.php'); ?>
<?php $names = $app['database']->selectAll('ingredient'); ?>
<?php foreach ($names as $inc) : ?>
 <li><?php echo $inc->name; ?></li>
<?php endforeach; ?>

    <h1>Admini staff</h1>

<form method="POST" action="/ingredientname">
<input name="ingredientname">
</form>
<?php require('partials/footer.php'); ?>