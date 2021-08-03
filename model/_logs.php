<?php

class Logs {

    function query($pdo) {
        $query = "SELECT date_format(time, '%d/%m/%Y %k:%i %p') as 'time' FROM logs WHERE id = (SELECT MAX(id) FROM logs)";
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