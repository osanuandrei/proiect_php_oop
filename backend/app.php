<?php

include('./db.php');
session_start();

class Admin {

    public $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function authenticate() {
        $user = $_POST['uname'];
        $pass = $_POST['psw'];

        $admins = $this->getAdminsFromDb();
        $firstRow = $admins[0];

        $userDB = $firstRow['username'];
        $passDB = $firstRow['password'];

        if($user === $userDB && $pass === $passDB) {
            header("Location: ../frontend/dashboard.html");
        } else {
            echo 'Datele sunt incorecte, incercati din nou. ';
        }


    }

    public function getAdminsFromDb() {
        $query = "SELECT * FROM admins";
        $result = $this->conn->query($query);

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


$admin = new Admin($conn);
$admin->authenticate();

session_abort();

?>