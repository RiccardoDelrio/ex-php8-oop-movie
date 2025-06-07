<?php
include_once "./Models/Genres.php";

class movie extends genres
{
    use Durata;
    public $nome;
    public $anno;
    public $regista;
    public $cover; // aggiunta proprietà cover

    //costruttrore per movie
    public function __construct($durata, $nome, $anno, $regista, genres $genres, $cover)
    {
        $this->durata = $durata;
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->genres = $genres;
        $this->cover = $cover;
    }
    //metodo per ottenere nome
    public function getNomeFilm()
    {
        return $this->nome;
    }
}



?>