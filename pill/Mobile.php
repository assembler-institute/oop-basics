<?php

require_once "Device.php";

class Mobile extends Device
{
    public int $phoneNumber;
    public string $camera;

    public function __construct($serialNumber, $name, $color, $phoneNumber, $camera)
    {
        parent::__construct($serialNumber, $name, $color);
        $this->phoneNumber = $phoneNumber;
        $this->camera = $camera;
    }

    /**
     * @param string $contact the user to contact
     * @return string that contains user phone and the contact
     * @author Brahim Benalia
     */
    public function callContact(string $contact): string
    {
        return "Calling $contact from $this->phoneNumber";
    }

    /**
     * @param int $deviceId
     * @return 
     * @author 
     */
    public function getDetail($deviceId): string
    {
        return "The mobile name is: $this->name";
    }
}
