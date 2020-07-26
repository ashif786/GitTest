<?php
setcookie('name','code',time()+60); // setting cookies
//setcookie('name', 'code', time()-60); //deleting cookies
//setcookie('name','codeholic',time()+60);  //updating cookies by changing names



echo '<pre>';

var_dump($_COOKIE);
echo '</pre>';