<?php require('partials/head.php'); ?>
    <?php if (!empty($feedbacks)) :?>   
        <ul>
        <?php foreach ($feedbacks as $feedback) : ?>
            <li><?php echo $feedback->subject; ?> (<?php echo $feedback->added ?>)</li>
        <?php endforeach ?>
        </ul>
    <?php endif; ?>
<h2> Tagasiside vorm </h2>
<form method="post" action="/add-feedback">
    <input type="text" name="subject" placeholder="Lisa teema">
    <textarea name="body"></textarea>
    <button class="btn btn-success" name="action" value="send">Edasta</button>
</form>

<?php require('partials/footer.php'); ?>