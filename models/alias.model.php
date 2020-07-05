<?php 
    class Alias {
    private $id;
    private $source;
    private $etat;
    
    // construct

    
    public function __construct($source, $etat){
        $this->source=$source;
        $this->etat=$etat;
    }
    
    public function getSource(){
        return $this->source;
    }

    public function setSource($source){
        $this->source=$source;
    }

    public function getEtat(){
        return $this->etat;
    }

    public function setEtat($etat){
        $this->etat=$etat;
    }
}
