<?php

require_once "Device.php";

class Tablet extends Device
{
    public string $book;

    public function __construct($serialNumber, $color, $book)
    {
        parent::__construct($serialNumber, $color);
        $this->book = $book;
    }

    /**
     * @param null
     * @return string "reading" + book
     * @author Brahim Benalia
     */
    public function readBook(): string
    {
        return "Reading $this->book";
    }
}
