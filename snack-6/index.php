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
            $votiScolastici = [
                'scoreIta' => 6,
                'scoreMath' => 8,
                'scoreGeo' => 8,
            ]  
        ],
        [
            'name' => 'Luigi',
            'lastname' => 'Cardarelli',
            $votiScolastici = [
                'scoreIta' => 8,
                'scoreMath' => 6,
                'scoreGeo' => 3,
           ]
        ],
        [
            'name' => 'Domenico',
            'lastname' => 'Cotugno',
            $votiScolastici = [
            'scoreIta' => 9,
            'scoreMath' => 10,
            'scoreGeo' => 8,
            ],
        ],
        [
            'name' => 'Salvatore',
            'lastname' => 'Esposito',
            $votiScolastici = [
                'scoreIta' => 4,
                'scoreMath' => 6,
                'scoreGeo' => 7,
            ],
        ],
    ]
?>

<?php  


?>


<?php 
   for($i = 0; $i < count($students); $i++) {
      
    $somma = array_sum($votiScolastici);

    $media = $somma / count($votiScolastici); 
    ?>
   
   <ul> 
    
    <li> Nome dell'alunno: <?php echo $students['name']; ?>
         <h2>La media è : <?php echo $media ; ?></h2></li>

   </ul>

<?php } ?>
</body>
</html>