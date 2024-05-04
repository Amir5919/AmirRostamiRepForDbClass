<?php
function selectUser($dbc){
    $sql = "SELECT * FROM users ";
    $result = $dbc -> query ($sql);
    return $result;
}


function selectQuestion($dbc){
    $sql = "SELECT * FROM questions ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectAnswer($dbc){
    $sql = "SELECT * FROM answer ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectComment($dbc){
    $sql = "SELECT * FROM comment ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectFactor($dbc){
    $sql = "SELECT * FROM factor ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectSavedQuestion($dbc){
    $sql = "SELECT * FROM savedQuestion ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectUsefulQuestion($dbc){
    $sql = "SELECT * FROM usefulQuestion ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectSavedAnswer($dbc){
    $sql = "SELECT * FROM savedAnswer ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectUsefulAnswer($dbc){
    $sql = "SELECT * FROM usefulAnswer ";
    $result = $dbc -> query ($sql);
    return $result;
}

function selectUsefulComment($dbc){
    $sql = "SELECT * FROM usefulComment ";
    $result = $dbc -> query ($sql);
    return $result;
}
?>