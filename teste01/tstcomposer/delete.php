<?php require_once "vendor/php-activerecord/php-activerecord/ActiveRecord.php";
require_once "config.php"; ?>
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
echo "<pre>";
print_r($actor);
foreach($ator as $actor){
    echo "Nome: ".$ator->first_name . " / " . $ator->last_name;
    echo "<a href='del.php?id=".$ator->actor_id."'><button>Deletar</button></a><br/>";
}
?>
</body>
</html>