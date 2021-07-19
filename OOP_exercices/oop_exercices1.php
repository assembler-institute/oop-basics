// Create a class called Device.
// The Device has to define the common properties for a device, like, for example,
// a method called getSerialNumber() which returns the Device serial number.

class Device
{
function __construct(int $serialNumber, string $mfr, $firmware)
{
$this->serialNumber = $serialNumber;
$this->mfr = $mfr;
$this->firmware = $firmware;
}

function getSerialNumber()
{
return $this->serialNumber;
}
}

// Then create another one called Mobile and then another one called Tablet.
// The Mobile and Tablet classes have to extend the Device class and define some particular
// properties by their own.

class Mobile extends Device
{
function __construct(string $system, int $mobileGeneration)
{
$this->system = $system;
$this->mobileGeneration = $mobileGeneration;
}

function getGeneration()
{
$g = $this->mobileGeneration;

if ($g === 5) {
echo 'Congrats you have 5G! You can go up to 10Gb per second!!!';
} elseif ($g === 4) {
echo 'Not bad, with 4G your mobile can go between 100 Mbps and 1Gbps!';
} else {
echo 'Please get a new device';
}
}
}

class Tablet extends Device
{
function __construct(string $system, bool $connCapacity)
{
$this->system = $system;
$this->mobileCapacity = $connCapacity;
}

function recogniceSystem()
{
if (strtolower($this->system) == 'android') {
echo 'System detected: you use Android. Good choise!';
} elseif (strtolower($this->system) == 'apple' || strtolower($this->system) == 'ios') {
echo "System detected: you use iOS... no comments";
} else {
echo "Are you using Windows phone?! What's your problem?!";
}
}
}

$nokia = new Device(1324654, 'Nokia', '13A');
$xiaomi = new Mobile('Android', 3);
$mitsubishi = new Tablet('Homebrew', 0);

echo $nokia->getSerialNumber();
echo '</br>';
echo $xiaomi->getGeneration();
echo '</br>';
echo $mitsubishi->recogniceSystem();

// You should also create a class called DeviceManager. This class has to have a method
// called getDeviceSerialNumber(Device $device) which has to call the getSerialNumber() method of Device objects.
// The DeviceManager Instance calls the getDeviceSerialNumber method with each one of the devices objects.

class DeviceManager extends Device
{
function __construct(int $serialNumber, string $mfr, $firmware)
{
parent::__construct($serialNumber, $mfr, $firmware);
$this->serial = $serialNumber;
$this->mfr = $mfr;
$this->firmware = $firmware;
$this->getSerialNumber();
}



function getDeviceSerialNumber(Device $device)
{
$this->getSerialNumber($device);
}
}

$motorola = new DeviceManager(1321561, 'Motorola', '1327B');
echo '</br>';
echo $motorola->getSerialNumber();
echo '</br>';