<?php

namespace App\Library;

class Book
{
    private $title;
    private $numberOfPages;
    private $currentPage = 1;

    public function __construct(string $title, int $numberOfPages)
    {
        $this->title = $title;
        $this->numberOfPages = $numberOfPages;
    }

    public function read($pagesRead)
    {
        $this->currentPage += $pagesRead;
        return $this;
    }

    public function currentPage()
    {
        if($this->currentPage <= $this->numberOfPages){
            return "You are currently on page {$this->currentPage}";
        }
        else {
            return "Congratulations, you have finished the book";
        }
    }

}