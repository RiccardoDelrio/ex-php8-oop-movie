<?php
class movie
{
    public $nome;
    public $anno;
    public $regista;

    //costruttrore per movie
    public function __construct($nome, $anno, $regista)
    {
        $this->nome = $nome;
        $this->anno = $anno;
        $this->regista = $regista;
    }
    //metodo per ottenere nome
    public function getNomeFilm($nome)
    {
        return $nome;
    }
}

$spiderman = new movie("Spiderman", "2020", "Peter Griffin");
$batman = new movie("Batman", "2024", "Homer Simpson");

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