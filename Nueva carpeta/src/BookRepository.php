<?php

namespace App;

class BookRepository
{
    private DatabaseConnection $databaseConnection;

    public function __construct()
    {
        $this->databaseConnection = new DatabaseConnection();
    }

    public function getBooks(): array
    {
        $sql = "SELECT id, name, description, image FROM Book";
        $this->databaseConnection->open();
        $result = $this->databaseConnection->getConn()->query($sql);
        $books = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $books[] = new Book($row['id'], $row['name'], $row['description'], $row['image']);
            }
        }
        $this->databaseConnection->close();
        return $books;
    }

}

