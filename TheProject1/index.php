<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmirRostami</title>
</head>
<body>
    
<?php

include 'dbConnect.php';
include 'add.php';
include 'delete.php';
include 'select.php';

$dbc = new mysqli($serverName , $userName , $password );
$dbc -> select_db($dbName);

if($dbc -> connect_error){
    die("connection failed: ". $dbc -> connect_error);
    echo "<br>";
}



$result = addQuestion($dbc);

if($result){
    echo "addQuestion query executed successfully!";
    echo "<br>";
}
else{
    echo "addQuestion query has an error: ".$dbc -> error;
    echo "<br>";
}



$result = deleteQuestion($dbc);

if($result){
    echo "deleteQuestion query executed successfully!";
    echo "<br>";
}
else{
    echo "deleteQuestion query has an error: ".$dbc -> error;
    echo "<br>";
}



$result = selectQuestion($dbc);
$table;
$jsonTable;

if($result->num_rows>0){
    echo "selectQuestion query executed successfully!";
    $table=$result->fetch_all();
    $jsonTable=json_encode($table);
    echo "<br>";
}
else{
    echo "0 result";
    echo "<br>";
}

var_dump($jsonTable);





$dbc -> close();

?>




</body>
</html>