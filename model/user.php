<?php

require_once 'connect_db.php';

class USER {
  public $name;
  public $email;
  public $password;
  public $lastname;
  public $db;
  public $bday;

  public function __construct($db) {
      $this->db = $db;
  }

  public function create() {
      $query = "INSERT INTO users (firstName, lastName, email, password, username, bday) 
                VALUES (?, ?, ?, ?, ?, ?)";

      $stmt = $this->db->prepare($query);

      $stmt->bindParam(1, $this->name, PDO::PARAM_STR);
      $stmt->bindParam(2, $this->lastname, PDO::PARAM_STR);
      $stmt->bindParam(3, $this->email, PDO::PARAM_STR);
      $stmt->bindParam(4, $this->password, PDO::PARAM_STR);
      $stmt->bindParam(5, $this->name, PDO::PARAM_STR);  
      $stmt->bindParam(6, $this->bday, PDO::PARAM_STR);

      if ($stmt->execute()) {
          echo 'connection successful';
      } else {
          echo 'failed to create user.';
      }
  }
}

?>