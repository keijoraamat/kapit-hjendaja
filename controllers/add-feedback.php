<?php
//print_r($_REQUEST);
$button = filter_input(INPUT_POST, 'action', FILTER_SANITIZE_STRING);
$subject = filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_STRING);
$body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_STRING);

if (isset($button) && $button === 'send') {

    $error = [];
    if  (empty($subject))  {
        $error[ ]='Teema puudu';
    }
    if  (empty($bodyt))  {
        $error[ ]='Sisu lahja';
    }
    if  (empty($error))  {
        $app['database']->insert('feedback', [
                'subject' => $subject,
                'body' => $body
        ]);
    }
}
header('Location: /feedback');
?> <meta http-equiv="refresh" content="30;URL='/feedback'" />