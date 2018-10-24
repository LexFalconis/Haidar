<?php require_once "vendor/autoload.php";
require_once "config.php";
require_once "menu.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Excel</title>
</head>
<body>
<?php
$filme = Film::find('all');

foreach($filme as $flm){
    echo "Nome: ".$flm->title . " / " . $flm->description;
    echo "<a href='del.php?id=".$flm->film_id."'><button>Deletar</button></a><br/>";
}
?>
</body>
</html>

<!-- TABLE film
  $filme->film_id
  $filme->title
  $filme->description
  $filme->release_year
  $filme->language_id
  $filme->original_language_id
  $filme->rental_duration
  $filme->rental_rate
  $filme->length
  $filme->replacement_cost
  $filme->rating
  $filme->special_features
  $filme->last_update
  -->