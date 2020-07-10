<?php
  class Database {
    // private  $dbHost = 'localhost';
    // private  $dbName = 'db_postfix'; 
    // private  $dbUsername = 'root';
    // private  $dbUserPassword = 'root';

    // php -S localhost:8000 -d error_reporting=E_All

    private $host = "mysql:host=localhost;dbname=db_postfix";
    private $user = "root";
    private $password = "root";
    private  $conn;

    public function __construct() {
      try{
        $this->conn = new PDO($this->host,$this->user,$this->password);
      }catch(PDOException $e){
          die($e->getMessage());
        }
    }

    // fonction d'ajout
    public function insert($name,$email, $password, $state){
        $req = "INSERT INTO user (name,email, password, state)
                VALUES (:name, :email, :password, :state)"; 
        $stmt = $this->conn->prepare($req);
        $stmt->execute(
            [
             'name'    => $name,
             'email'    => $email,
             'password' => $password,
             'state'    => $state,
            ]
        );
        return true;
    }

    public function readAll(){
        $data = array();
        $req = "SELECT * FROM user";
        $stmt = $this->conn->prepare($req);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
          $data[] = $row;
        }
        return $data;
    }

    public function getUserById($id){
      $req = "SELECT * FROM user WHERE id=:id";
      $stmt = $this->conn->prepare($req);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }

    public function update($id, $email, $password,$state){
      $req = "UPDATE user SET name = :name,email = :email, password = :password, state = :state
               WHERE id = :id";
      $stmt = $this->conn->prepare($req);
      $stmt->execute(
        [
         'name'=>$name,
         'email'=>$email,
         'password'=>$password,
         'state'=>$state,
        ]
    );
    return true;

    }

    public function delete($id){
      $req = "DELETE * FROM user WHERE id = :id";
      $stmt = $this->conn->prepare($req);
      $stmt->execute(['id' => $id]);
      return true;
    }

    public function totalRowCount(){
      $req = "SELECT * FROM user";
      $stmt = $this->conn->prepare($req);
      $stmt->execute();
      $totalRow = $stmt->rowCount();
      return $totalRow;
  }

}

