<?php require_once "vendor/autoload.php";
require_once "config.php";
require_once "menu.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Deletar</title>
</head>
<body>
<?php
$actor = Actor::find('all');

foreach($actor as $ator){
    echo "Nome: ".$ator->first_name . " / " . $ator->last_name;
    echo "<a href='del.php?id=".$ator->actor_id."'><button>Deletar</button></a><br/>";
}
?>
</body>
</html>