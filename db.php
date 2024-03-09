<?php
require_once __DIR__ . "/models/serietv.php";
require_once __DIR__ . "/models/movie.php";







//includere sia production che genre giusto per averli nel caso sposti tutto o ti vuoi portare dietro


$Vacanze_2000 = new Movie(
    "Vacanze 2000",
    "Italiano",
    5,
    new Genre("Commedia", "Vacanze in montagna"),
    "20€",
    50,
);

$La_Preda = new Movie(
    "La Preda",
    "Inglese",
    12,
    new Genre("fantasy", "Ex militare esce fuori di testa dalla guerra"),
    "10$",
    180,
);

$Avengers = new Movie(
    "Gabriele va in campeggio",
    "USA",
    10,
    new Genre("fantasy", "Salvano il pianeta da thanos"),
    "GRATIS",
    120min,

);
$Teen_Wolf = new serieTV(
    "Teen_Wolf",
    "USA",
    100,
    new Genre("Action", "Lupi Mannari"),
    10,
    20min,

);


$films = [
    $Vacanze_2000,
    $La_Preda,
    $Avengers,
    $Teen_Wolf
];