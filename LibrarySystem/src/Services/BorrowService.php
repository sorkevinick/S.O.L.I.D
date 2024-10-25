<?php
namespace LibrarySystem\Services;

use LibrarySystem\Interfaces\BorrowServiceInterface;
use LibrarySystem\Interfaces\BookRepositoryInterface;
use LibrarySystem\Interfaces\SessionManagerInterface;

class BorrowService implements BorrowServiceInterface {
    private $bookRepository;
    private $sessionManager;

    public function __construct(BookRepositoryInterface $bookRepository, SessionManagerInterface $sessionManager) {
        $this->bookRepository = $bookRepository;
        $this->sessionManager = $sessionManager;
    }

    public function borrowBook($title, $userId) {
        $book = $this->bookRepository->findBookByTitle($title);
        
        if ($book && $book['copies'] > 0) {
            $this->bookRepository->addBook($title, $book['author'], $book['copies'] - 1);
            $this->sessionManager->startSession();
            $this->sessionManager->set('last_borrow', [$title, $userId]);
            echo "Book borrowed: $title by User $userId.";
        } else {
            echo "Book unavailable.";
        }
    }

    public function returnBook($title, $userId) {
        $book = $this->bookRepository->findBookByTitle($title);
        
        if ($book) {
            $this->bookRepository->addBook($title, $book['author'], $book['copies'] + 1);
            echo "Book returned: $title by User $userId.";
        } else {
            echo "Book not found.";
        }
    }
}