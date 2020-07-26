<?php
session_start();
echo session_id();

if($_SESSION['counter'])
{
    $_SESSION['counter']++;
}
else
{
    $_SESSION['counter']=1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4>YOU HAVE VISITED THIS PAGE <?php echo $_SESSION['counter'] ?> TIMES</h4>
</body>
</html>