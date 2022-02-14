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
}

$database = new Database();
