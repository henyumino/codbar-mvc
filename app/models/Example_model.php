<?php

class Example_model{

    private $table = 'your_table';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }
}