<?php
class Production
{
    public $title;
    public $language;
    public $vote;

    function __construct($title, $language, $vote)
    {
        $this->title = $title;
        $this->language = $language;
        $this->vote = $vote;
    }
}

$fast&furious = new Production(
    "Fast&furiousX",
    "Inglese",
    "10/10"
);

$Avengers = new Production(
    "Avengers",
    "Inglese",
    "8/10"
);

$Forrest_Gump= new Production(
    "Forrest Gump",
    "Inglese",
    "5/10"
);

$productions = [
    $fast&furious,
    $Avengers,
    $Forrest_Gump
];
var_dump($productions)
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
     <!-- BOOTS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
</body>
</html>