<?php

class Index
{
    public function connectToDb() {
        return mysqli_connect("localhost", "root", "", "proiect_php_oop");
    }

    public function authenticate() {
        $user = $_POST['uname'];
        $pass = $_POST['psw'];

        $admins = $this->getAdminsFromDb();
        $firstRow = $admins[0];

        $userDB = $firstRow['user'];
        $passDB = $firstRow['pass'];

        if($user === $userDB && $pass === $passDB) {
            header("Location: http://127.0.0.1/proiect_php_oop/frontend/dashboard.html");
            session_start();

        } else {
            echo 'Datele sunt incorecte, incercati din nou. ';
        }
    }

    public function getAdminsFromDb() {
        $conn = $this->connectToDb();
        $query = "SELECT * FROM admins";
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
}