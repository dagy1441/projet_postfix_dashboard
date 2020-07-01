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

    public function setName($source){
        $this->source=$source;
    }

    public function getEtat(){
        return $this->etat;
    }

    public function setEtat($etat){
        $this->etat=$etat;
    }
}


$p1 = new Alias('sdsd', 'adasd');
echo $p1->getSource().' '.$p1->getEtat();