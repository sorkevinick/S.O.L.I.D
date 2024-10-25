<?php
namespace LibrarySystem\Interfaces;

interface BorrowServiceInterface {
    public function borrowBook($title, $userId);
    public function returnBook($title, $userId);
}