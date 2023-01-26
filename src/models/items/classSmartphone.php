<?php
final class Smartphone
{
  public array $contacts;
  static $defaultCall = 'mum';

  function __construct(array $contacts)
  {
    $this->contacts = $contacts;
  }

  public function getContacts(): array
  {
    return $this->contacts;
  }

  public function setContacts(array $contacts): void
  {
    $this->contacts = $contacts;
  }

  function call(string $contact):void {
    if (!$contact)
      $contact = self::$defaultCall;
    echo "I'm calling to . . . <b>" . $contact . '</b> at number <b>' . $this->contacts[$contact] . '</b>';
  }

  function toString():void
  {
    echo '<h3>Contacts:</h3>  <strong><pre>';
    print_r($this->contacts);
    echo '</strong></pre>';
  }

}