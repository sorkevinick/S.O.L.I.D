<?php
require_once __DIR__ . '/../vendor/autoload.php';

use LibrarySystem\Repositories\BookRepository;
use LibrarySystem\Services\BorrowService;
use LibrarySystem\Sessions\SessionManager;

// Dependencies
$bookRepository = new BookRepository();
$sessionManager = new SessionManager();

// Borrow Service
$borrowService = new BorrowService($bookRepository, $sessionManager);

// Borrow and return books
$borrowService->borrowBook('1984', 1);
$borrowService->returnBook('1984', 1);
