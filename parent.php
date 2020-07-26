<?php

class abc{
    public static $value=10;

}

class xy extends abc {

    public function xstatis()
    {
        return parent::$value;
    }
}

$boj=new xy();
echo $boj->xstatis();