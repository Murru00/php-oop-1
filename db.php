
<?php





$Fast&Furious = new Movie(
    "Fast and Furious solo parti originali",
    "USA",
    8,
    new Genre("Action", "Dominic Toretto Salva la sua Famiglia"),
    "10€",
    90,
);

$Avengers = new Movie(
    "Avengers end game",
    "Inglese",
    10,
    new Genre("fantasy", "Salvano il pianeta sconfiggendo Thanos"),
    "20€",
    130,
);

$Vacanze_2000 = new Movie(
    "Vacanze 2000",
    "Italiano",
    7,
    new Genre("Commedia", "Vacanze in montagna"),
    "GRATIS",
    120,

);
$Teen_Wolf = new serieTV(
    "Teen Wolf",
    "USA",
    100,
    new Genre("Action", "Lupi Mannari"),
    "GRATIS",
    20,

);


$films = [
    $Fast&Furious,
    $Avengers,
    $Vacanze_2000,
    $Teen_Wolf
];
// var_dump($films);