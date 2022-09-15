<?php

class Employer{
    private $fname;
    private $lname;
    private $dob;
    private $salary;

    public function __construct($fname, $lname, $dob,$salary)
    {
        $this->fname=$fname;
        $this->lname=$lname;
        $this->dob=$dob;
        $this->salary=$salary;
    }

    public function getFname(){
        return $this->fname;
    }
    public function getLname(){
        return $this->lname;
    }
    public function getDob(){
        return $this->dob;
    }
    public function getSalary(){
        return $this->salary;
    }
}