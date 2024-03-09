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
    140,
);

$La_Preda = new Movie(
    "La Preda",
    "Inglese",
    12,
    new Genre("fantasy", "Ex militare esce fuori di testa dalla guerra"),
    "10€",
    180,
);

$Avengers = new Movie(
    "Avengers",
    "USA",
    10,
    new Genre("fantasy", "Salvano il pianeta da thanos"),
    "GRATIS",
    120,

);
$Teen_Wolf = new serieTV(
    "Teen_Wolf",
    "USA",
    100,
    new Genre("Action", "Lupi Mannari"),
    10,
    20,

);


$films = [
    $Vacanze_2000,
    $La_Preda,
    $Avengers,
    $Teen_Wolf
];