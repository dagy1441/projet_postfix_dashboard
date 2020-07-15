<?php
class Database
{
    // private  $dbHost = 'localhost';
    // private  $dbName = 'db_postfix';
    // private  $dbUsername = 'root';
    // private  $dbUserPassword = 'root';

    // php -S localhost:8000 -d error_reporting=E_All

    private $host = "mysql:host=localhost;dbname=db_postfix";
    private $user = "root";
    private $password = "root";
    private $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO($this->host, $this->user, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
    
    public function getDb()
    {
        if ($this->conn instanceof PDO) {
            return $this->conn;
        }
    }

    public function prepare(String $stmt, Array $fields = []):bool {
      $req = $this->pdo->prepare($stmt);
      $req->execute($fields);
  
      return $req;
    }
    // fonction d'ajout
    public function insert($name, $email, $password, $state)
    {
        $req = "INSERT INTO user (name, email, password, state)
                VALUES (:name, :email, :password, :state)";

        $hash = sha1($password);
        $stmt = $this->conn->prepare($req);
        $stmt->execute(
            [
                'name' => $name,
                'email' => $email,
                'password' => $hash,
                'state' => $state,
            ]
        );
        return true;
    }

    public function readAll()
    {
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
    
    public function selectUser($username, $email)
    {
        $req = "SELECT * FROM user WHERE name=:name OR email=:email";
        $stmt = $this->conn->prepare($req);
        $stmt->execute([
          'name' => $username,
          'email' => $email
        ]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $user;
    }

    public function getUserById($id)
    {
        $req = "SELECT * FROM user WHERE id=:id";
        $stmt = $this->conn->prepare($req);
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function update($id, $name, $email, $password, $state)
    {
        $req = "UPDATE user SET name = :name, email = :email, password = :password, state = :state
               WHERE id = :id";
        $stmt = $this->conn->prepare($req);
        $stmt->execute(
            [
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'state' => $state,
                'id' => $id,
            ]
        );
        return true;

    }

    public function delete($id)
    {
        $req = "DELETE FROM user WHERE id = :id";
        $stmt = $this->conn->prepare($req);
        $stmt->execute(['id' => $id]);
        return true;
    }

    public function totalRowCount()
    {
        $req = "SELECT * FROM user";
        $stmt = $this->conn->prepare($req);
        $stmt->execute();
        $totalRow = $stmt->rowCount();
        return $totalRow;
    }

}
