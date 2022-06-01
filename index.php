<?php require_once __DIR__ . '/init.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Message on slack</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="post" action="/slack/" id="form" class="validate">
        <div class="form-field">
            <label for="message-input">Message</label>
            <textarea name="message" id="message-input" cols="30" rows="10" placeholder="Type your message"></textarea>
        </div>
        <div class="form-field">
            <label for=""></label>
            <input type="submit" value="Send Message" />
        </div>

        <?php global $notices;
        if (isset($notices)) : ?>
            <ul>
                <?php foreach ($notices as $notice) : ?>
                    <li><?= $notice ?></li>
                <?php endforeach; ?>
            </ul>
        <?php unset($notices);
        endif; ?>
    </form>
</body>

</html>
