<?php
$user_name = $_GET['user_name'];
$user_age = $_GET['user_age'];
$user_email = $_GET['user_email'];

$message = '';

if (
    strlen($user_name) >= 3 &&
    (strpos($user_email, '@') !== false && strpos($user_email, '.') !== false) &&
    is_numeric($user_age)
) {
    $message = 'Accesso abilitato';
} else {
    $message = 'accesso negato';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <h2>
        <?= $message ?>
    </h2>
</body>

</html>