<?php

include('Index.php');

class Eveniment extends Index
{
    public function createEvent() {
        $conn = self::connectToDb();
        $titlu = $_POST['titlu'];
        $despre = $_POST['despre'];
        $dateAndTime = $_POST['data_si_ora'];

        $query = 'INSERT INTO eveniment (titlu, data_si_ora, despre) VALUES ("' . $titlu . '", "' . $dateAndTime . '", "' . $despre . '")';
        $conn->query($query);

        header("Location: http://127.0.0.1/proiect_php_oop/frontend/dashboard.html");
    }

    public function generateWebsite() {

    }

    public function editEvent() {
        return 0;
    }

    public function deleteEvent() {
        return 0;
    }

    public function sendInvitation() {
        return 0;
    }
}

