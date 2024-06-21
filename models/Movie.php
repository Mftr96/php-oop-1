<?php
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
?>