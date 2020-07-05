<?php 
    class User {
    private $id;
    private $name;
    private $phone;
    private $email;
    private $password;
    private $etat;
 
    // construct
    public function __construct( $name, $phone,$email, $password, $etat){
        $this->name=$name;
        $this->phone=$phone;
        $this->email=$email;
        $this->password=$password;
        $this->etat=$etat;
    }
    
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name=$name ;
    }

    public function getPop3(){
        return $this->phone;
    }

    public function setPop3($phone){
        $this->phone=$phone ;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email=$email;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPassword($password){
        $this->password=$password ;
    }

    public function getEtat(){
        return $this->etat;
    }

    public function setEtat($etat){
        $this->etat=$etat ;
    }

   

}


