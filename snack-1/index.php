<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 
## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa
e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php  $teams = [
            [
                'nameCasa' => 'Neapolis',
                'nameOspiti' => 'Catania',
                'scoreCasa' => '35',
                'scoreOspiti' => '22',
            ],
            [
                'nameCasa' => 'Svezia',
                'nameOspiti' => 'Germania',
                'scoreCasa' => '18',
                'scoreOspiti' => '16',
            ],
            [
                'nameCasa' => 'Milano',
                'nameOspiti' => 'Torino',
                'scoreCasa' => '55',
                'scoreOspiti' => '68',
            ],
            [
                'nameCasa' => 'Liverpool',
                'nameOspiti' => 'Prozzese',
                'scoreCasa' => '120',
                'scoreOspiti' => '100',
            ],
        ];
?>


    <ul>
        <?php for($i = 0; $i < count($teams); $i++) { ?>
            <?php $thisTeams = $teams[$i]; ?>

            <li>
                <h2>
                    <?php echo $thisTeams['nameCasa'] ?> - <?php echo $thisTeams['nameOspiti'] ?> | <?php echo $thisTeams['scoreCasa'] ?> - <?php echo $thisTeams['scoreOspiti'] ?>
                </h2>
            </li>

        <?php } ?>
    </ul>
 




</body>
</html>