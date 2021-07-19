// Create an abstract class Device which defines an abstract method called getDetail($deviceId).
// Create these two methods getId which returns the name of this device and getSerialNo returns
// the serial number for this device.

abstract class Device
{
function __construct(string $name, int $serial)
{
$this->name = $name;
$this->serial = $serial;
}

function getId($name)
{
return $name;
}

function getSerialNo($serial)
{
return $serial;
}

abstract function getDetail($deviceId): string;
}

// Now create a class which extends the Device and implements getDetail($deviceId) method.
// Each device defines in its own way the details. That’s why it is abstracted to let the subclasses implement this method.
// The other methods are common between devices.

class Mobile extends Device
{

function getDetail($deviceId): string
{
return "Mobile brand: $this->name</br>Mobile model: $deviceId";
}
}

$xiaomi = new Mobile('Xiaomi', 4564651);
echo $xiaomi->getDetail('RedMi Note');