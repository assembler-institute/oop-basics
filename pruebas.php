<?php 

class Cal{
    public function sum(){
        $args = func_get_args();
        $exp="echo(".implode("+",$args).");";
        eval($exp);
    }

    public function __call($funname,$funargs)
    {
        //echo $funname."<br>";
        //echo print_r($funargs);
        call_user_func_array([$this,'sum'],$funargs);
    }
    
}
 
$ob = new Cal;

try {
    //$ob->sum(5,10,15);
 	$ob->add(10,20); 
}
catch(Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
/* $ob->add(10,20);  */
