<?php
namespace LibrarySystem\Repositories;

use LibrarySystem\Interfaces\BookRepositoryInterface;

class BookRepository implements BookRepositoryInterface {
    private $books = [
        '1984' => ['author' => 'George Orwell', 'copies' => 3],
        'Brave New World' => ['author' => 'Aldous Huxley', 'copies' => 2]
    ];

    public function findBookByTitle($title) {
        return $this->books[$title] ?? null;
    }

    public function addBook($title, $author, $copies) {
        $this->books[$title] = ['author' => $author, 'copies' => $copies];
        echo "Book added: $title by $author with $copies copies.";
    }
}