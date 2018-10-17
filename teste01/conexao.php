<?php

$conn = 'mysql:host=127.0.0.1;dbname=estudos';

try{
    $db = new PDO($conn, 'root','123456789');
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    if($e->getCode()==1049){
        echo "Erro no banco";
    }else{
        echo $e->getMessage();
    }
}