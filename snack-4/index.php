<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
<!-- ## Snack 4
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo
e suddividerlo in tanti paragrafi. 
Ogni punto un nuovo paragrafo. -->

<?php 

// Prendiamo una stringa acculturata, definiamola in una stringa
$stringaLunga = "
    Nel mezzo del cammin di nostra vita
    mi ritrovai per una selva oscura,
    ché la diritta via era smarrita.

    Ahi quanto a dir qual era è cosa dura
    esta selva selvaggia e aspra e forte
    che nel pensier rinova la paura!

    Tant' è amara che poco è più morte;
    ma per trattar del ben ch'i' vi trovai,
    dirò de l'altre cose ch'i' v'ho scorte.";

// Dividiamola con explode("parolaCheTriggeraExplode, "Stringa,Var o Array")
$StringaDivisa = explode('.', $stringaLunga);




?>
<!-- Stampiamo gli indici che avrà generato, in questo caso 0, 1 e 2 -->
<p> <?php echo $StringaDivisa[1]; ?></p>

<p> <?php echo $StringaDivisa[0]; ?></p>

<p> <?php echo $StringaDivisa[2]; ?></p>
</body>
</html>