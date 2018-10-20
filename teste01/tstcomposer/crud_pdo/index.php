<?php include_once"conect.php";

for($i=0;$i<5;$i++){
    $pessoa = "Pessoa número ".$i." ".date('h:i:s');
    $idade = $i+1 ." Anos";
    $sqlInsert = "insert into PESSOAS (NOME, IDADE)VALUES(:pessoa,:idade)";
    try{
        $cadastro = $db->prepare($sqlInsert);
        $cadastro->bindValue(':pessoa', $pessoa, PDO::PARAM_STR);
        $cadastro->bindValue(':idade', $idade, PDO::PARAM_STR);
        if($cadastro->execute()){
            echo "<script>alert('Cadastrado com sucesso');</script>";
        }
    }catch(PDOException $erro){
        echo "Erro: " . $erro->getMessage();
    }
}
echo "<hr>";

$sqlRead = "select * from PESSOAS";
try{
    $read = $db->prepare($sqlRead);
    $read->execute();
}catch(PDOException $erro){
    echo "Erro: ".$erro->getMessage();
}
while($exibir = $read->fetch(PDO::FETCH_OBJ)){
    echo "Nome: " . $exibir->NOME . " Idade: " . $exibir->IDADE . "<a href='deletar.php?apagar=".$exibir->ID."' target='_blank'><button>Deletar</button></a><a href='editar.php?edit=".$exibir->ID."' target='_blank'><button>Editar</button></a><br/>";
}