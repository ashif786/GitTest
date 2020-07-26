<?php

trait mess1{
    public function echh()
    {
        echo 'hello';
    }
}

trait mess2{
    public function ytui()
    {
        echo 'king';
    }
}

class abc{
    use mess1;
    use mess2;
}

$boj=new abc();
$boj->echh();
echo '<br>';
$boj->ytui();