<?php 
    class Compte {
    private $id;
    private $email;
    private $password;
    private $etat;
    private $imap;
    private $pop3;
    private $quota;
    
    // construct

    
    public function __construct($email, $password, $etat, $imap, $pop3, $quota){
        $this->email=$email;
        $this->password=$password;
        $this->etat=$etat;
        $this->etat=$etat;
        $this->imap=$imap;
        $this->pop3=$pop3;
        $this->quota=$quota;
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

    public function getImap(){
        return $this->imap;
    }

    public function setImap($imap){
        $this->imap=$imap ;
    }

    public function getPop3(){
        return $this->pop3;
    }

    public function setPop3($pop3){
        $this->pop3=$pop3 ;
    }

    public function getQuota(){
        return $this->quota;
    }

    public function setQuota($quota){
        $this->quota=$quota ;
    }
}


