<?php
class connection{
    private $server = "127.0.0.1";
    private $user = "root";
    private $pw = "4dv@nc3dpwd";
    private $db = "crud";

    function getConnection(){
       return mysqli_connect("127.0.0.1","root","4dv@nc3dpwd","crud");
    }
}