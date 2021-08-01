<?php

class Contacts {

    function query($pdo) {
        $query = "SELECT * FROM contacts";
        $stmt = $pdo->prepare($query);
        $stmt->execute();

        $data = [];

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }

}

?>