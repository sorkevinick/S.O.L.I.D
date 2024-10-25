<?php
require_once __DIR__ . '/../src/BookManager.php';

$bookManager = new BookManager();
$bookManager->borrowBook('1984');
$bookManager->returnBook('1984');
$bookManager->addBook('Fahrenheit 451', 'Ray Bradbury', 4);
