
<?php

interface Born
{
    public function getPlanet();
    public function getEnviroment();
}




abstract class LivingBeing implements Born
{
    private $planet;
    private $enviroment;

    public function __construct($planet, $enviroment)
    {
        $this->planet = $planet;
        $this->enviroment = $enviroment;
    }

    public function getEnviroment()
    {
        return $this->enviroment;
    }

    public function getPlanet()
    {
        return $this->planet;
    }

    public function __destruct()
    {
        echo "destruct living being";
    }
}
