<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmirRostami</title>
</head>
<body>
    
<?php

include 'dbConnect.php';

$dbc = new mysqli($serverName , $userName , $password );
$dbc -> select_db($dbName);

if($dbc -> connect_error){
    die("connection failed: ". $dbc -> connect_error);
    echo "<br>";
}

include 'addUser.php';

$result = addUser($dbc);

if($result){
    echo "addUser query executed successfully!";
    echo "<br>";
}
else{
    echo "addUser query has an error: ".$dbc -> error;
    echo "<br>";
}

include 'deleteUser.php';

$result = deleteUser($dbc);

if($result){
    echo "deleteUser query executed successfully!";
    echo "<br>";
}
else{
    echo "deleteUser query has an error: ".$dbc -> error;
    echo "<br>";
}




$dbc -> close();

?>




</body>
</html>
