<?php require_once "vendor/autoload.php";
require_once "config.php";
require_once "menu.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert</title>
</head>
<body>
<?php
if ($_POST){
    $actor = new Actor();
    $actor->first_name = $_POST['nome'];
    $actor->last_name = $_POST['sobrenome'];
    $actor->last_update = $_POST['data'];
    $actor->save();

    $actor = Actor::find_by_last_name($_POST['sobrenome']);
    echo $_POST['nome'] . " cadastrado com sucesso.<pre>";
    print_r($actor);
    echo "</pre>";
}else{ ?>
    <form action="#" method="POST">
        <input type="text" name="nome" placeholder="Digite o nome..." /><br />
        <input type="text" name="sobrenome" placeholder="Digite o sobrenome" /><br />
        <input type="text" name="data" placeholder="digite uma data" /><br />
        <input type="submit" value="Cadastrar" />
    </form>
<?php
}
?>
</body>
</html>