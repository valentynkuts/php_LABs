<?php

class Stats
{
    private $conn_id;

    function __construct($host, $user, $pass, $db)
    {
        $this->conn_id = mysqli_connect($host, $user, $pass, $db);

        if (!$this->conn_id) {
            echo "Ошибка: Невозможно установить соединение с MySQL." . PHP_EOL;
            //echo "Код ошибки errno: " . mysqli_connect_errno() . PHP_EOL;
            //echo "Текст ошибки error: " . mysqli_connect_error() . PHP_EOL;
            exit;
        }
    }

    function insert($query)
    {
       $result =  mysqli_query($this->conn_id, $query);
        if(!$result){
            echo "Error insert";
            exit;
        }
        return $result;
    }

    function select($query)
    {
        $dane = array();
        $result = $this->insert($query);
        while ($row = mysqli_fetch_row($result)){
            $dane[] = $row;
        }
        return $dane;
    }

    function __destruct()
    {
        if (!mysqli_close($this->conn_id)) {
            exit("Error");
        }
    }
}
