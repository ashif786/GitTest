<?php

class abc {
     

  public function __construct ($name)
    {

$this->name=$name;

}

function xyz(){
 echo  $this->name;

}

}

class zoom extends abc{

     

    function person()
    {
        echo 'hello extend';
        
    }


}

$obj=new abc("ashif");
echo $obj->xyz();

echo '</br>';
//Null Coalescing operator in php 7.4

$person=['name'=>'ashif'];
$person['name'] ?? 'not available';
echo $person['name'];

//date
echo '</br>';
echo date('Y-M-D H-i-s');
echo '</br>';
echo date('Y-M-D H-i-s', time()-60*60*24);
//server info

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';