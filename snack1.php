<?php
$matches = [
    [
        'home_team' => 'milano',
        'away_team' => 'napoli',
        'home_score' => '3',
        'away_score' => '1'
    ],
    [
        'home_team' => 'inter',
        'away_team' => 'fiorentina',
        'home_score' => '1',
        'away_score' => '1'
    ],
    [
        'home_team' => 'verona',
        'away_team' => 'genoa',
        'home_score' => '1',
        'away_score' => '2'
    ],

];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>matches</title>
</head>

<body>
    <h2>match di oggi</h2>
    <ul>
        <?php foreach ($matches as $match) { ?>

            <li>
                <?php foreach ($match as $key => $value) { ?>
                    <?= $key ?>: <?= $value ?><br>
                <?php } ?>
            </li>

        <?php } ?>
    </ul>
</body>

</html>