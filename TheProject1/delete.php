<?php
function deleteUser($dbc,$UId){
    $sql = "DELETE FROM users WHERE UId = $UId";
    $result = $dbc -> query ($sql);
    return $result;
    }


function deleteQuestion($dbc,$QId){
    $sql = "DELETE FROM questions WHERE QId = $QId";
    $result = $dbc -> query ($sql);
    return $result;
}


function deleteAnswer($dbc,$AId){
    $sql = "DELETE FROM answer WHERE AId = $AId";
    $result = $dbc -> query ($sql);
    return $result;
}

function deleteComment($dbc,$CId){
    $sql = "DELETE FROM comment WHERE CId = $CId";
    $result = $dbc -> query ($sql);
    return $result;
}

function deleteFactor($dbc,$FId){
    $sql = "DELETE FROM factor WHERE FId = $FId";
    $result = $dbc -> query ($sql);
    return $result;
}

function deleteSavedQuestion($dbc,$UId,$QId){
    $sql = "DELETE FROM savedQuestion WHERE FId = $FId AND QId = $QId";
    $result = $dbc -> query ($sql);
    return $result;
}
function deleteUsefulQuestion($dbc,$UId,$QId){
    $sql = "DELETE FROM usefulQuestion WHERE FId = $FId AND QId = $QId";
    $result = $dbc -> query ($sql);
    return $result;
}

function deleteSavedAnswer($dbc,$UId,$AId){
    $sql = "DELETE FROM savedAnswer WHERE FId = $FId AND AId = $AId";
    $result = $dbc -> query ($sql);
    return $result;
}
function deleteUsefulAnswer($dbc,$UId,$AId){
    $sql = "DELETE FROM usefulAnswer WHERE FId = $FId AND AId = $AId";
    $result = $dbc -> query ($sql);
    return $result;
}

function deleteUsefulComment($dbc,$UId,$CId){
    $sql = "DELETE FROM usefulComment WHERE FId = $FId AND CId = $CId";
    $result = $dbc -> query ($sql);
    return $result;
}
?>