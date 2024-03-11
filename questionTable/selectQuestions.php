<?php
function selectQuestion($dbc){
$sql = "SELECT * FROM questions ";
$result = $dbc -> query ($sql);
return $result;
}
?>