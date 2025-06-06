<?php
class movie extends genres
{
    public $nome;
    public $anno;
    public $regista;

    //costruttrore per movie
    public function __construct($nome, $anno, $regista, genres $genres)
    {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
        $this->genres = $genres;
    }
    //metodo per ottenere nome
    public function getNomeFilm($nome)
    {
        return $nome;
    }
}
class genres
{
    public $genres;
    public function __construct($genres)
    {
        $this->genres = $genres;
    }
}

$spidermanGenre = new genres("drammatic");
$batmanGenre = new genres("horror");

$spiderman = new movie("Spiderman", "2020", "Peter Griffin", $spidermanGenre);
$batman = new movie("Batman", "2024", "Homer Simpson", $batmanGenre);

var_dump($spiderman)
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    ciao
</body>

</html>