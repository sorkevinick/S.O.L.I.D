<?php
require_once __DIR__ . '/../vendor/autoload.php';

use LibrarySystem\Repositories\BookRepository;
use LibrarySystem\Services\BorrowService;
use LibrarySystem\Sessions\SessionManager;

$bookRepository = new BookRepository();
$sessionManager = new SessionManager();

$borrowService = new BorrowService($bookRepository, $sessionManager);

$borrowService->borrowBook('1984', 1);
$borrowService->returnBook('1984', 1);
