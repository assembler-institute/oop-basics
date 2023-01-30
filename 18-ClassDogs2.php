<?php

class Dogs2 extends Dogs {

    public string $type = "";

    public string $firstName = "";

    public function __construct (string $name1, string $firstName, string $breed1, int $age1, string $type1) {
        $this-> name = $name1;
        $this -> firstName = $firstName;
        $this -> breed = $breed1;
        $this-> age = $age1;
        $this -> type = $type1;
    }

    public function __destruct() {
        echo "This properties get deleted: ".$this-> name;
    }

    public function getDogsData1() {

        $data1 = "
            <h2> Data Dogs 2 </h2>
            Name : {$this->name}<br>
            First Name : {$this->firstName}<br>
            Breed : {$this ->breed}<br>
            Age : {$this->age}<br>
            Type : {$this->type}<br><br>
        ";
        return $data1;
    }
}

?>