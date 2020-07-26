<?php

abstract class abc{

public function __construct($name)
{
    $this->name=$name;
}

public abstract function demo();


}


class xyz extends abc{

    public function demo()

{
return $this->name;
}
}

$obj=new xyz('abstract');
echo $obj->demo();