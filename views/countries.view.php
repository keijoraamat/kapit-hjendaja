<?php require('partials/head.php'); ?>

<h1>Riigi lisamine</h1>

<form method="POST" action="/addcountry">

    <input name="country_name">

</form>

<table>
<?php if (!empty($countries)) : ?>
<thead>
    <tr>
        <th>Name</th>
        <th>Äded</th>
        <th>modify</th>
        <th>Löschen</th>
    </tr>
    </thead>
<?php foreach ( $countries as $country ) { ?>
    <tr align="center">
        <td><?php echo $country->name;?></td>
        <td><?php echo $country->time_added;?></td>
        <td><a href="modify?id=<?php echo $country->id; ?>">*</td>
        <td><a href="deletecountry?id=<?php echo $country->id; ?>">X</td>
        
    </tr>
<?php } ?>
<?php endif; ?>
</table>

<?php require('partials/footer.php'); ?>