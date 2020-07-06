<?php
  class Database {
    // private  $dbHost = 'localhost';
    // private  $dbName = 'db_postfix'; 
    // private  $dbUsername = 'root';
    // private  $dbUserPassword = 'root';

    private $dsn = "mysql:host=localhost;dbname=db_postfix";
    private $user = "root";
    private $password = "root";
    private  $conn;

    public function __construct() {
      try{
        $this->conn = new PDO($this->dsn,$this->user,$this->password);
      }catch(PDOException $e){
          die($e->getMessage());
        }
    }

    // public static function connect() {
    // // Autoriser une seule connexion pour toute la durée de l’accès
    //   if ( null == self::$conn ){
    //     try{
    //     self::$conn = new PDO( "mysql:host=".self::$dbHost.";"."dbname=".self::$dbName, self::$dbUsername, self::$dbUserPassword);
    //     }catch(PDOException $e){
    //       die($e->getMessage());
    //     }
    //   } 
    //   return self::$conn;
    // }

    // public static function disconnect(){
    //     self::$conn = null;
    // }

    // fonction d'ajout
    public function insert($email, $password, $state){
        $req = "INSERT INTO user(email, password, state)
                VALUES(:email, :password, :state)"; 
        $stmt = $this->conn->prepare(req);
        $stmt->execute(
            [
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
      $req = "SELECT * FROM user WHERE id = :id";
      $stmt = $this->conn->prepare($req);
      $stmt->execute(['id' => $id]);
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
      return $result;
    }

    public function update($id, $email, $password,$state){
      $req = "UPDATE user SET email = :email, password = :password, state = :state
               WHERE id = :id";
      $stmt = $this->conn->prepare($req);
      $stmt->execute(
        [
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

