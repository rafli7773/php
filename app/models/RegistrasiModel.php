<?php

class RegistrasiModel
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
}
