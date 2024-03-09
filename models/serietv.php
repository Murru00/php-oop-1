<?php

require_once __DIR__ . "/Production.php";

class serieTV extends Production
{
    public $seasons;
    public $episodes;

    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genere,
        int $seasons,
        int $episodes,
        // string $money,
    ) {
        parent::__construct($title, $language, $vote, $genere);
        $this->seasons = $seasons;
        $this->episodes = $episodes;
        // $this->money = $money;
    }
};