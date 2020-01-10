<?php require('partials/head.php'); ?>
<?php if ($_SESSION["username"]) : ?>
        
        
<h1>Riigi lisamine</h1>

<form method="POST" action="/addcountry">

    <input name="country_name">

</form>
<?php endif; ?>
<table>
<?php if (!empty($countries)) : ?>
<thead>
    <tr>
        <th>Name</th>
        <th>Äded</th>
        <?php if ($_SESSION["is_admin"]) : ?>
        <th>modify</th>
        <th>Löschen</th>
        <?php endif; ?>
    </tr>
    </thead>
<?php foreach ( $countries as $country ) { ?>
    <tr align="center">
        <td><?php echo $country->name;?></td>
        <td><?php echo $country->time_added;?></td>
        <?php if ($_SESSION["is_admin"]) : ?>
        <td><a href="modify?id=<?php echo $country->id; ?>">*</td>
        <td><a href="deletecountry?id=<?php echo $country->id; ?>">X</td>
        <?php endif; ?>
        
    </tr>
<?php } ?>
<?php endif; ?>
</table>

<?php require('partials/footer.php'); ?>