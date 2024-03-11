<?php
function deleteQuestion($dbc){
$sql = "DELETE FROM questions WHERE id = {$_GET['id']}";
$result = $dbc -> query ($sql);
return $result;
}
?>