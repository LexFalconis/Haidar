<?php include_once "conect.php";
#echo "Editar: ".$_GET['edit']."<hr>";
if($_GET){
    #echo"entrou no if - ".$_GET['edit']."<p>";
    $sqlRead = "SELECT * FROM PESSOAS WHERE ID=".$_GET['edit'];
    try{
        $read = $db->prepare($sqlRead);
        $read->execute();
		#echo "try OK<br/>";
       
    }catch(PDOException $erro){
        echo "Erro: ".$erro->getMessage();
    }
    $busca = $read->fetch(PDO::FETCH_OBJ);
    echo "<form action='editar.php' method='POST'>";
    echo"Nome: <input type='text' value='".$busca->NOME."' name='nome' />";
    echo"Idade: <input type='text' value='".$busca->IDADE."' name='idade' />";
    echo "<input type='hidden' value='". $busca->ID."' name='id' />";
    echo "<input type='submit' value='atualizar'/>";
    echo"</form>";
}else if($_POST){
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $id = $_POST['id'];
#echo $id;
    $sqlUp = "update PESSOAS set NOME=:nome, IDADE=:idade where ID=".$id;

    try{
        $update = $db->prepare($sqlUp);
        $update->bindValue(':nome',$nome,PDO::PARAM_STR);
        $update->bindValue(':idade',$idade,PDO::PARAM_STR);
        $update->execute();
        echo "Usuário " . $nome . " atualizado";
    }catch(PDOException $erro){
        echo "Erro: ".$erro->getMessage();
    }
}else{
  echo "Kd o Get? ¬¬";
}