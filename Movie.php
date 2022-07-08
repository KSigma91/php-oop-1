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
        $this->printMovie();
    }

    public function getVote() {
        if ($this->vote > $this->limit) {
            return 'Questo film ha superato la sufficienza';
        } else {
            return 'Questo film non ha superato la sufficienza';
        }
    }

    public function printMovie() {
        return "<h1>{$this->title}</h1>
                <h2>{$this->genre}</h2>
                <h3>{$this->vote}</h3>"
                . $this->getVote();
    }
}

?>