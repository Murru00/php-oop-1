<?php

require_once __DIR__ . "/models/Production.php";
require_once __DIR__ . "/models/Genre.php";
require_once __DIR__ . "/db.php";
require_once __DIR__ . "/models/serietv.php";
require_once __DIR__ . "/models/movie.php";







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
    <div class="d-flex justify-content-center mt-5">
        <?php foreach ($films as $film) : ?>
            <ul>
                <li>
                    <b>Titolo:</b>
                    <?php echo $film->get_title() ?>
                </li>
                <li>
                    <b>Lingua:</b>
                    <?php echo $film->language ?>

                </li>
                <li>
                    <b>Voto:</b>
                    <?php echo $film->vote ?>
                </li>
                <li>
                    <b>Tipo:</b>
                    <?php echo $film->genere->nome ?>
                </li>
                <li>
                    <b>Descrizione:</b>
                    <?php echo $film->genere->descrizione ?>
                </li>


                <?php if ($film instanceof Movie) : ?>
                    <li>
                        <b>Prezzo:</b>
                        <?php echo $film->money ?>
                    </li>
                    <li>
                        <b>Durata:</b>
                        <?php echo $film->duration ?>
                    </li>
                <?php endif ?>
                <?php if ($film instanceof serieTV) : ?>
                    <li>
                        <b>Stagioni:</b>
                        <?php echo $film->seasons ?>
                    </li>
                    <li>
                        <b>Episodi:</b>
                        <?php echo $film->episodes ?>
                    </li>

                <?php endif ?>
            </ul>
        <?php endforeach; ?>
    </div>


</body>

</html>