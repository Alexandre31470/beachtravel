<?php

function setDB(){
    static $pdo;

    if ($pdo===null){
        $pdo = new PDO('mysql:host=localhost;dbname=beachtravel', 'root' , '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
return $pdo;
  
};

function showArray($array){
    echo '<pre>';
    print_r($array);
    echo '<pre>';
}