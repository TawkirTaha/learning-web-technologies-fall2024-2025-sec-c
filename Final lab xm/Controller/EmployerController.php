<?php
include '../models/Employer.php';
include '../php/db_config.php';

class EmployerController {
    private $employerModel;

    public function __construct() {
        $db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        $this->employerModel = new Employer($db);
    }

    public function register($data) {
        return $this->employerModel->register($data['name'], $data['company'], $data['contact'], $data['username'], $data['password']);
    }

    public function update($data) {
        return $this->employerModel->update($data['id'], $data['name'], $data['company'], $data['contact']);
    }

    public function delete($id) {
        return $this->employerModel->delete($id);
    }

    public function search($keyword) {
        return $this->employerModel->search($keyword);
    }
}
?>