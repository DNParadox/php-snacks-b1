<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
<!-- Creare un array contenente qualche alunno di un’ipotetica classe.
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->
    
<?php
    $students = [
        [
            'name' => 'Pasquale',
            'lastname' => 'Aversano',
            'votiScolastici' => [
                6,
                8,
                8,
            ]  
        ],
        [
            'name' => 'Luigi',
            'lastname' => 'Cardarelli',
            'votiScolastici' => [
                8,
                6,
                3,
            ]  
        ],
        [
            'name' => 'Domenico',
            'lastname' => 'Cotugno',
            'votiScolastici' => [
                9,
                10,
                4,
            ]  
        ],
        [
            'name' => 'Salvatore',
            'lastname' => 'Esposito',
            'votiScolastici' => [
                4,
                6,
                7,
            ]  
        ],
    ];
?>

<?php 
   for($i = 0; $i < count($students); $i++) {
    $thisStudent = $students[$i];
    $somma = array_sum($thisStudent['votiScolastici']);
    $media = $somma / count($thisStudent['votiScolastici']); 
?>
   <ul>   
    <li> 
        <h2> Nome dell'alunno: <?php echo $thisStudent['name']; ?></h2>
        <h3> Cognome dell'Alunno: <?php echo $thisStudent['lastname']; ?> </h3>
        <h3> La media dell'alunno è : <?php echo $media; ?></h3>
    </li>
   </ul>
<?php } ?>
</body>
</html>