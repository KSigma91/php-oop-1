<?php

class Movie {
    public $title;
    public $genre;
    public $vote;
    public $limit = 5;

    public function __construct(string $title, string $genre, int $vote)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->vote = $vote;
        $this->getVote();
    }

    public function getVote() {
        if ($this->vote > 5) {
            $this->limit = 'Questo film ha superato la sufficienza';
        } else {
            $this->limit = 'Questo film non ha superato la sufficienza';
        }
    }
}

?>