<?php

include('Index.php');

class Eveniment extends Index
{
    public function createEvent() {
        $conn = self::connectToDb();
        $titlu = $_POST['titlu'];
        $despre = $_POST['despre'];
        $dateAndTime = $_POST['data_si_ora'];

        $query2 = 'SELECT * FROM admins';
        $result = $conn->query($query2);


        $query = 'INSERT INTO eveniment (titlu, data_si_ora, despre) VALUES ("' . $titlu . '", "' . $dateAndTime . '", "' . $despre . '")';
        $conn->query($query);
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

