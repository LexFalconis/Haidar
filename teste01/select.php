<?php
#phpinfo();
include_once "conexao.php";
$sqlRead = 'Select * from PESSOAS order by NOME asc';
try{
    $read = $db->prepare($sqlRead);
    $read->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}
while($rs = $read->fetch(PDO::FETCH_OBJ)){
    echo "Nome: " . $rs->NOME . " Idade: " . $rs->IDADE . "<br />";
}

echo "<hr>";
$sqlRead = 'Select * from CARROS order by ANO asc';
try{
    $read = $db->prepare($sqlRead);
    $read->execute();
}catch(PDOException $e){
    echo $e->getMessage();
}

while($rs = $read->fetch(PDO::FETCH_OBJ)){
 echo "Modelo: " . $rs->MODELO . " Ano: " . $rs->ANO . "<br />";
}