<?php
#phpinfo();
include_once "conexao.php";
$sqlRead = 'Select * from testes order by NOME DESC';
try{
    $read = $db->prepare($sqlRead);
    $read->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}
while($rs = $read->fetch(PDO::FETCH_OBJ)){
    echo "Nome: " . $rs->NOME . " Idade: " . $rs->IDADE . "<br />";
}