<?php

namespace App\Persistence;

class ConnectionFactory{
    private $_conn;
    private $_user = "root";
    private $_pass = "1234";
    private $_dbname = "conexaophp";
    private $_host = "localhost";

    function __construct(){

    }

    public function getInstance(){
        try{
            if(!isset($this->_conn)){
                $this->_conn = new \PDO("mysql:host=localhost; dbname=conexaophp;charset=UTF8", "root", "1234");
                return $this->_conn;
            }else{
                return $this->_conn;
            }
        } catch (\PDOException $e) {
            $e->getMessage();
        }
    }
}