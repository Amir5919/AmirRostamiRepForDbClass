<?php
function deleteUser($dbc){
$sql = "DELETE FROM users WHERE id = {$_GET['id']}";
$result = $dbc -> query ($sql);
return $result;
}
?>
