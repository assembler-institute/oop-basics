<?php
class Character {

    protected $name;

    function __construct(string $name){
        $this->name = $name;
    }

    public function getName():string {
        return $this->name;
    }

    public function setName (string $name):void{
        $this->name = $name;
    }

  function talk() {
    echo $this->name . ' is talking . . .';
  }

  function toString():void
  {
    echo "Name - <strong>" . $this->name . '</strong><br>';
  }
}