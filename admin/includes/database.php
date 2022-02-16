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

        // $this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME); old way
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); // new way

        if ($this->connection->connect_errno) {
            die("DataBase Connection Failed Badly " . $this->connection->connect_error);
        }
        // else {
        //     echo "connected";
        // }

    }

    public function query($sql)
    {
        // $result = mysqli_query($this->connection, $sql);
        $result = $this->connection->query($sql);
        $this->confirm_query($result);
        return $result;
    }

    private function confirm_query($result)
    {
        if (!$result) {
            // die("QUERY FAILED " . mysqli_error($this->connection));
            die("QUERY FAILED confirm_query " . $this->connection->error);

        }
    }

    public function escape_string($string)
    {
        // $escaped_string = mysqli_real_escape_string($this->connection, $string);
        $escaped_string = $this->connection->real_escape_string($string);
        return $escaped_string;
    }

    public function the_insert_id()
    {
        // return $this->connection->insert_id;
        return mysqli_insert_id($this->connection);
    }

}

$database = new Database();
