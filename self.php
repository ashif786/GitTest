<?php

class abc{
    public static $value=10;
    public function xstatis()
    {
        return self::$value;
    }
}

$boj= new abc();
echo $boj->xstatis();