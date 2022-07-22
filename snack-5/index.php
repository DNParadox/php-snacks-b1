<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body> 
<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];
?>
<ul>
<?php for($i = 0; $i < count($db); $i++) { ?> 
<?php $thisTeacher = $db['teachers'][$i];  ?> 
<?php $thisPm = $db['pm'][$i];  ?> 


    <li class="greysquare"> Gli insegnanti sono: <?php echo $thisTeacher['name'] .' ' .  $thisTeacher['lastname']; ?> </li>
    <li class="greensquare"> i PM sono: <?php echo $thisPm['name'] .' ' .  $thisPm['lastname']; ?> </li>
    

<?php }?>  
</ul>

</body>
</html>