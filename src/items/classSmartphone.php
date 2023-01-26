<?php
final class Smartphone {
      public array $contacts;

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////VARIABLES

    function __construct(array $contacts) {
        $this->contacts = $contacts;
    }

    //////////////////////////////////////////////////////////////////////////////////////////////////////////////CONSTRUCTORES

    public function getContacts():array {
        return $this->contacts;
    }

    public function setContacts(array $contacts):void {
        $this->contacts = $contacts;
    }

}