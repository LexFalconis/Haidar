<?php require_once 'vendor/php-activerecord/php-activerecord/ActiveRecord.php';
require_once "config.php";
require_once "menu.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select e Update</title>
</head>
<body>
<?php
if ($_POST){
    $actor = Actor::find($_POST['nome']);
    ?>
    <form method="GET" action="#">
        Nome<input type="text" name="nome" value="<?=$actor->first_name;?>" /><br/>
        Sobrenome<input type="text" name="sobrenome" value="<?=$actor->last_name;?>" /><br/>
        Data<input type="text" name="data" value="<?=$actor->last_update;?>" /><br/>
        <input type="hidden" name="id" value="<?=$actor->actor_id;?>" />
        <input type="submit" value="Atualizar" />
    </form>
    <?php
    echo "Id: ".$actor->actor_id;
    echo "<br />Nome: ".$actor->first_name;
    echo "<br />Sobrenome: ".$actor->last_name;
    echo "<br/>Data: ".$actor->last_update;
}else if($_GET){
    $actor = Actor::find($_GET['id']);
    $actor->first_name = $_GET["nome"];
    $actor->last_name = $_GET["sobrenome"];
    $actor->last_update = $_GET["data"];
    $actor->save();
    $actor = Actor::find($_GET['id']);
    echo "<pre>";
    print_r($actor);
    echo "</pre>";
} else{ ?>
    <form method="POST" action="#">
        <input type="text" name="nome" placeholder="nome a ser pesquisado..." />
        <input type="submit" value="Pesquisar" />
    </form>
<?php
}
?>    
</body>
</html>