<?php
include_once "./Traits/Durata.php";
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
$avatarGenre = new genres("fantasy");
$matrixGenre = new genres("sci-fi");
$inceptionGenre = new genres("thriller");
$lotrGenre = new genres("fantasy");
$godfatherGenre = new genres("crime");
$starwarsGenre = new genres("sci-fi");

$movies = [
    new movie(120, "Spiderman", "2020", "Peter Griffin", $spidermanGenre, "https://www.sonypictures.it/sites/italy/files/2022-11/DP_6792600_TC_1400x2100_DP_6792599_SpiderManNoWayHome_2021_EST_2000x3000_IT-min.jpg"),
    new movie(150, "Batman", "2024", "Homer Simpson", $batmanGenre, "https://m.media-amazon.com/images/I/81p+xe8cbnL._AC_SY679_.jpg"),
    new movie(162, "Avatar", "2009", "James Cameron", $avatarGenre, "https://m.media-amazon.com/images/I/41kTVLeW1CL._AC_.jpg"),
    new movie(136, "The Matrix", "1999", "Lana Wachowski", $matrixGenre, "https://m.media-amazon.com/images/I/51EG732BV3L.jpg"),
    new movie(148, "Inception", "2010", "Christopher Nolan", $inceptionGenre, "https://m.media-amazon.com/images/I/91pR9wKJ3zL._AC_SY679_.jpg"),
    new movie(178, "The Lord of the Rings", "2001", "Peter Jackson", $lotrGenre, "https://m.media-amazon.com/images/I/51Qvs9i5a%2BL._AC_.jpg"),
    new movie(175, "The Godfather", "1972", "Francis Ford Coppola", $godfatherGenre, "https://upload.wikimedia.org/wikipedia/en/1/1c/Godfather_ver1.jpg"),
    new movie(121, "Star Wars", "1977", "George Lucas", $starwarsGenre, "https://upload.wikimedia.org/wikipedia/en/8/87/StarWarsMoviePoster1977.jpg"),
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-dark text-light">
    <div class="container py-5">
        <h1 class="mb-4 text-center">Movie List</h1>
        <div class="table-responsive">
            <table class="table table-dark table-striped table-bordered align-middle shadow">
                <thead class="table-primary text-dark">
                    <tr>
                        <th scope="col">Cover</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Anno</th>
                        <th scope="col">Regista</th>
                        <th scope="col">Genere</th>
                        <th scope="col">Durata (min)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($movies as $movie): ?>
                        <tr>
                            <td>
                                <img src="<?php echo $movie->cover; ?>" alt="cover" class="img-fluid rounded shadow-sm"
                                    style="max-width: 80px;">
                            </td>
                            <td class="fw-bold"><?php echo $movie->nome; ?></td>
                            <td><?php echo $movie->anno; ?></td>
                            <td><?php echo $movie->regista; ?></td>
                            <td>
                                <span class="badge bg-info text-dark"><?php echo $movie->genres->genres; ?></span>
                            </td>
                            <td>
                                <i class="bi bi-clock-history me-1"></i><?php echo $movie->durata; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>