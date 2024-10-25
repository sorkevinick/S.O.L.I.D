<?php
namespace LibrarySystem\Interfaces;

interface BookRepositoryInterface {
    public function findBookByTitle($title);
    public function addBook($title, $author, $copies);
}