<?php

interface healthyFood {
    public function Feed();
    public function Hydrate();
    public function Regular();
    public function getVitamin();
}

class Fruit implements healthyFood {
    public function Feed() {
    
        echo 'I am feeding';
}
    
    public function Hydrate() {
        
        echo 'I am hydrating';
    }

    public function Regular() {
        
        echo 'I regulate intestinal transit';
    }
}

class Kiwi implements healthyFood {
    public function getVitamin() {
    
        echo 'I have vitamin C';
}

}

?>