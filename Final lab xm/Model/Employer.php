<?php
class Employer {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function register($name, $company, $contact, $username, $password) {
        $stmt = $this->conn->prepare('INSERT INTO employers (name, company, contact, username, password) VALUES (?, ?, ?, ?, ?)');
        $stmt->bind_param('sssss', $name, $company, $contact, $username, password_hash($password, PASSWORD_DEFAULT));
        return $stmt->execute();
    }

    public function update($id, $name, $company, $contact) {
        $stmt = $this->conn->prepare('UPDATE employers SET name=?, company=?, contact=? WHERE id=?');
        $stmt->bind_param('sssi', $name, $company, $contact, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare('DELETE FROM employers WHERE id=?');
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    public function search($keyword) {
        $stmt = $this->conn->prepare('SELECT * FROM employers WHERE name LIKE ? OR company LIKE ?');
        $searchKey = "%$keyword%";
        $stmt->bind_param('ss', $searchKey, $searchKey);
        $stmt->execute();
        return $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
    }
}
?>