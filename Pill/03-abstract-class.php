
<?php

abstract class Citric {

    abstract public function getUses();
    abstract public function values($uses);


    public function Uses(){
        echo $this->getUses();
    }
    
}

class Lemon extends Citric {
    public function getUses(){
        return " ";
    }

    public function values($uses){
        return "Lemon is useful for " . $uses;
    }
}

?>
