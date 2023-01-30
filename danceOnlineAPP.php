<?php
interface danceOnlineApp
{
    public function login($username, $password ,$email);
    public function classesPay($pay, $deubt);
}

class danceOnline implements danceOnlineApp
{
    private $username;
    private $email;
    private $password;
    public $pay;
    public $deubt;

    public function login($username, $password ,$email){
        $this-> username = $username;
        $this-> email = $email;
        $this-> password = $password;
        return "welcome $this->username for login with password $this->password and email $this->email";
    }

    public function classesPay($pay, $deubt){
        $this-> pay = $pay;
        $this-> deubt = $deubt;

        $difference = ($this->deubt)-($this->pay);
        if($difference==0){
            return "the class has been successfully paid";
        } else if($difference>0){
            return "you still need to pay $difference € to have your class paid successfully";
        }else{
             return "the class has been paid successfully, you have overpaid, so we refund you ". $difference*-1 ." €" ;
        }
        
    }
}

$app = new danceOnline();

echo $app->login("Coldaniel2001", "123456", "danielvillenawilson@gmail.com");
echo "</br>";
echo $app->classesPay(50,60);



?>