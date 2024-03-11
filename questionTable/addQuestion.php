<?php
function addQuestion($dbc){
$sql = "INSERT INTO questions (subject,title,body) VALUES ( 'Amir' , 'Rostami' , '1234','09929876543') , ( 'Javad' , 'Torabi' , '1400','09132456789') , ( 'Reza' , 'Pourmiri' , '4321' , '09038765432')";
$result = $dbc -> query ($sql);
return $result;
}
?>