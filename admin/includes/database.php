<?php

require_once "new_config.php";

class Database
{
    public $connection;

    public function __construct()
    {
        $this->open_db_connection();
    }

    public function open_db_connection()
    {

        $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_errno()) {
            die("DataBase Connection Failed Badly " . mysqli_error($this->connection));
        }
        // else {
        //     echo "connected";
        // }

    }

    public function query($sql)
    {
        $result = mysqli_query($this->connection, $sql);

        return $result;
    }

    private function confirm_query($result)
    {
        if (!$result) {
            die("QUERY FAILED " . mysqli_error($this->connection));
        }
    }

    public function escape_string($string)
    {
        $escaped_string = mysqli_real_escape_string($this->connection, $string);
        return $escaped_string;
    }

}

$database = new Database();