<?php 
    class Domaine {
    private $id;
    private $domaine;
    private $etat;
    
    // construct

    
    public function __construct($domaine, $etat){
        $this->domaine=$domaine;
        $this->etat=$etat;
    }
    
    public function getDomaine(){
        return $this->domaine;
    }

    public function setDomaine($domaine){
        $this->domaine=$domaine;
    }

    public function getEtat(){
        return $this->etat;
    }

    public function setEtat($etat){
        $this->etat=$etat;
    }
}