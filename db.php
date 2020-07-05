<?php
  class Database {
    private  $dbHost = 'localhost';
    private  $dbName = 'db_postfix'; 
    private  $dbUsername = 'root';
    private  $dbUserPassword = 'root';

    private  $conn = null;

    public function __construct() {
      try{
        $this->conn = new PDO( "mysql:host=".$this->dbHost.";"."dbname=".$this->dbName, $this->dbUsername, $this->dbUserPassword);
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
    public function insert($fname, $phone, $email, $password){
        $req = " INSERT INTO user(name, phone, email, password)
                 VALUES (:fname, :phone, :email, :password)"; 
        $stmt = $this->conn->prepare(req);
        $stmt->execute(
            [
             'fname'=>$fullname,
             'phone'=>$phone,
             'email'=>$email,
             'password'=>$password
            ]
        );
        return true;
    }

    public function readAll(){
        $data = array();
        $req = "SELECT * FROM user";
        $stmt = $this->conn->prepare(req);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($result as $row) {
          $data[] = $row;
        }
        return $data;
    }
}

$ob = new Database();

print_r($ob->readAll);


?>