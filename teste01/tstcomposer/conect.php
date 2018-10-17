<?php
$conn = "mysql:host=localhost;dbname=estudos";
$user = 'root';
$psw = '123456789';

try{
    $db = new PDO ($conn,$user,$psw);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch(PDOException $erro){
    if($erro->getCode()==1049){
        echo "Erro no banco";
    } else{
        echo $erro->getMessage();
    }
}