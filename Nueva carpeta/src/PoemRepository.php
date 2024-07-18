<?php

namespace App;

class PoemRepository
{
    private DatabaseConnection $databaseConnection;

    public function __construct()
    {
        $this->databaseConnection = new DatabaseConnection();
    }

    public function getPoems(): array
    {
        $sql = "SELECT id, title, content, image FROM Poem";
        $this->databaseConnection->open();
        $result = $this->databaseConnection->getConn()->query($sql);
        $poems = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $poems[] = new Poem($row['id'], $row['title'], $row['content'], $row['image']);
            }
        }
        $this->databaseConnection->close();
        return $poems;
    }

}

