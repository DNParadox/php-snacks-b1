<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella
    documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age
    sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->


    <!-- Creare un email tramite comando $_GET  -->
    <?php

        $name = $_GET['name'];
        $age = $_GET['age'];
        $mail = $_GET['mail'];
    // Questa condizione avrà come necessario per essere eseguita : Una @ un . in mail . il nome che contenga più di 3 caratteri e che Age sia in numero
    
    if(strlen($mail) > 3 && '.' && '@' && strlen($name) > 3 && is_numeric($age)) {
        echo 'Accesso Riuscito';
    } else {
        echo 'Accesso Negato';
    };

    ?>

    <h1> test</h1>
</body>
</html>