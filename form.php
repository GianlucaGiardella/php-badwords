<?php
$censored = $_POST['censored'];
$text = $_POST['text'];

$text_lenght = strlen($text);
$new_text = str_replace($censored, "***", $text);
$new_text_lenght = strlen($new_text);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h2><?= $text ?></h2>
    <h2><?= $text_lenght ?></h2>

    <h2><?= $new_text ?></h2>
    <h2><?= $new_text_lenght ?></h2>
</body>

</html>