<?php include_once "conect.php";
#echo "Apagar: ".$_GET['apagar']."<hr>";
if($_GET){
    #echo "entrou no if";
  try{
      $apaga = "delete from PESSOAS where ID=".$_GET['apagar'];
      $db->exec($apaga);
      echo "<hr>deletado<hr>";
  }catch(PDOException $erro){
      echo "Erro: ".$erro->getMessage();
  }
  $conn = null;
}else{
  echo "Kd o Get? ¬¬";
}