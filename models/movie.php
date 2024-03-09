<?php
require_once __DIR__ . "/Production.php";

class Movie extends Production
{
    public $money;
    public $duration;

    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genere,
        string $money,
        int $duration,
    ) {
        parent::__construct($title, $language, $vote, $genere);
        $this->money = $money;
        $this->duration = $duration;
    }
};