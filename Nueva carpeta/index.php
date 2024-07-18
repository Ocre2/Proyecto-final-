<?php

use App\BookRepository;

require 'vendor/autoload.php';

$bookRepository = new BookRepository();
$books = $bookRepository->getBooks();

foreach ($books as $book) {
    echo "ID: " . $book->getId() . " - Name: " . $book->getName() . " - Description: " . $book->getDescription() . " - Image: " . $book->getImage() . "<br>";
}

