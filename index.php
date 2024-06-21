<?php
//includo lo store(mettere solo uno / nel percorso dopo il DIR)
include __DIR__ . '/store.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop1</title>
</head>

<body>
    <ul>
        <!-- creazione ciclo su lista_film -->
        <?php foreach ($lista_film as $film) { ?>
            <li><?= "$film->nome_film $film->anno_uscita $film->regista" ?></li>
        <?php } ?>
    </ul>

</body>

</html>