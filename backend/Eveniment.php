<?php

class Eveniment
{
    public function connectToDB() {
        $conn = mysqli_connect('localhost', 'root', '', 'proiect_php_oop');
        return $conn;
    }

    public function getIds() {
        $query = "SELECT id FROM eveniment";
        $conn = $this->connectToDB();
        $result = $conn->query($query);

        if ($result && $result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            return array(); // No data found
        }
    }
    public function createEvent() {
        $conn = $this->connectToDB();
        $titlu = $_POST['titlu'];
        $despre = $_POST['despre'];
        $dateAndTime = $_POST['data_si_ora'];

        $ids = $this->getIds();
        $firstRow = $ids[0];
        $idd = $firstRow['id'];


        $id=$idd + 1;

        $query = 'INSERT INTO eveniment (id, titlu, data_si_ora, despre) VALUES ("'.$id.'", "' . $titlu . '", "' . $dateAndTime . '", "' . $despre . '")';
        $result = $conn->query($query);
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

