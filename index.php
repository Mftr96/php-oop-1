<?php
//creazione classe 
class Movie
{
    //definizione attributi classe
    public $nome_film;
    public $anno_uscita;
    public $regista;
    //definizione costruttore 
    function __construct($nome_film, $anno_uscita, $regista)
    {
        $this->nome_film = $nome_film;
        $this->anno_uscita = $anno_uscita;
        $this->regista = $regista;
    }
    //creazione funzione che restituisce il nome del film 
    public function get_film_year()
    {
        return $this->anno_uscita;
    }
};
//definisco array con due istanze movie 
$lista_film=[
    new Movie('Taxi Driver',1976,'Martin Scorsese'),
    new Movie('ET',1980,'Steven Spielberg'),

];
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