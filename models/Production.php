<?php
require_once __DIR__ . "/Genre.php";
require_once __DIR__ . "/serietv.php";
require_once __DIR__ . "/movie.php";



class Production
{
    
    public $title;
    public $language;
    public $vote;
    public $genere;


    
    function __construct(
        string $title,
        string $language,
        int $vote,
        Genre $genere
    ) {

        
        $this->set_title($title);
        $this->language = $language;
        $this->vote = $vote;
        $this->genere = $genere;
    }
    public function set_title($title)
    {
        if (empty($title) || !is_string($title))
            return;
        $this->title = ucfirst($title);
    }
    public function get_title()
    {
        return $this->title;
    }
};