<?php
 //its 3rd branch
//$array=['one','two'];
$array=array('one','two');
foreach($array as $row)
{
    echo $row.'<br>';
}

//

$myarr=array('king','kong');
echo $myarr[0];//geting one array value
$myarr[2]='steve';//adding to array
foreach($myarr as $f)
{
    echo '<br>';
    printf('name is: %s',$f);
    echo '<br>';

}

//associative array
$assc=array('name'=>'ashif','age'=>30);
foreach($assc as $k=>$v)
{
    echo '<br>';

    printf('%s is %s',$k,$v);
    echo '<br>';

}

//multidimensional array


$marray=array(array('abc','xyz'),
array('one','two')
);
// echo $marray[0][0].'<br>';
// echo $marray[0][1].'<br>';
// echo $marray[1][0].'<br>';
// echo $marray[1][1].'<br>';
for($row=0;$row<2;$row++)
{
    for($col=0;$col<2;$col++)
    {
        echo $marray[$row][$col].'<br>'; 
        
    }
}



//

function abc($name)
{

  $name=5;
   

}

$name=10;
abc($name);
echo $name;//result 10 
echo '<br>';
//
function abcf(&$name)
{

  $name=5;
   

}

$name=10;
abcf($name);
echo $name;//result 5 
