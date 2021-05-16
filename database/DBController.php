<?php

class DBController{

    // database conection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = 'shopepe';

    // connection property
    protected $con = null;

    // call contstructor
    public function __construct(){
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if($this->con->connect_error){
            echo "Fail".$this->con->connect_error;
        }
    }

}

?>