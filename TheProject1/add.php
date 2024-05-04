<?php
function addUser($dbc,$userName,$email,$pass,$premium){
    $sql = "INSERT INTO users (userName,email,pass,premium) VALUES ( '$userName' , '$email' , '$pass','$premium') ";
    $result = $dbc -> query ($sql);
    return $result;
    }


function addQuestion($dbc,$UId,$subject,$tittle,$body){
$sql = "INSERT INTO questions (UId,subject,title,body) VALUES ( '$UId' , '$subject' , '$tittle','$body')";
$result = $dbc -> query ($sql);
return $result;
}

function addAnswer($dbc,$UId,$QId,$tittle,$body){
    $sql = "INSERT INTO answer (UId,QId,title,body) VALUES ( '$UId' , '$QId' , '$tittle','$body')";
    $result = $dbc -> query ($sql);
    return $result;
    }

function addComment($dbc,$UId,$QId,$text){
    $sql = "INSERT INTO comment (UId,QId,text) VALUES ( '$UId' , '$QId' , '$text')";
    $result = $dbc -> query ($sql);
    return $result;
}
    function addFactor($dbc,$UId,$premium,$fromDate,$toDate){
    $sql = "INSERT INTO factor (UId,premium,fromDate,toDate) VALUES ( '$UId' , '$premium' , '$fromDate','$toDate')";
    $result = $dbc -> query ($sql);
    return $result;
}
function saveQuestion($dbc,$UId,$QId){
    $sql = "INSERT INTO savedQuestions (UId,QId) VALUES ( '$UId' , '$QId')";
    $result = $dbc -> query ($sql);
    return $result;
}
function usefulQuestion($dbc,$UId,$QId){
    $sql = "INSERT INTO usefulQuestion (UId,QId) VALUES ( '$UId' , '$QId')";
    $result = $dbc -> query ($sql);
    return $result;
}

function saveAnswer($dbc,$UId,$QId){
    $sql = "INSERT INTO savedAnswer (UId,QId) VALUES ( '$UId' , '$QId')";
    $result = $dbc -> query ($sql);
    return $result;
}
function usefulAnswer($dbc,$UId,$QId){
    $sql = "INSERT INTO usefulAnswer (UId,QId) VALUES ( '$UId' , '$QId')";
    $result = $dbc -> query ($sql);
    return $result;
}
function usefulComment($dbc,$UId,$QId){
    $sql = "INSERT INTO usefulComment (UId,QId) VALUES ( '$UId' , '$QId')";
    $result = $dbc -> query ($sql);
    return $result;
}
?>