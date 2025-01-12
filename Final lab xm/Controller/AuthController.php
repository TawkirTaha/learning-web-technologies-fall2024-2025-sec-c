<?php
include '../models/Admin.php';
include '../php/db_config.php';

class AuthController {
    private $adminModel;

    public function __construct() {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->adminModel = new Admin($db);
    }

    public function login($data) {
        return $this->adminModel->login($data['username'], $data['password']);
    }
}
?>