<?php

class Database{
    private $link;

    public function __construct()
    {
        $this->connect();
    }

    private function connect(){
        $this->link=new PDO('mysql:host=localhost;dbname=company;charset=utf8mb4','root','');
        return $this;
    }

    public function execute($sql){
        $sth=$this->link->prepare($sql);
        return $sth->execute();
    }

    public function query($sql){
        $exe=$this->execute($sql);
        $result=$exe->fetchAll(PDO::FETCH_ASSOC);
        if($result==false){
            return [];
        }
        return $result;
    }


}
$db=new Database;
