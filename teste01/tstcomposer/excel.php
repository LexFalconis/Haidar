<?php require_once "vendor/autoload.php";
require_once "config.php";
require_once "menu.php";
error_reporting(E_ALL); // todas?>
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
$filme = Filme::find('all', array('order' => 'title desc'));
#print_r($filme);
$dados = array();
foreach($filme as $flm){
    $dados[] = array($flm->film_id,
    $flm->title,
    $flm->description,
    $flm->release_year,
    $flm->language_id,
    $flm->original_language_id,
    $flm->rental_duration,
    $flm->rental_rate,
    $flm->length,
    $flm->replacement_cost,
    $flm->rating,
    $flm->special_features,
    $flm->last_update);
}
#echo $dados[1]->title;
echo "<hr><pre>";
print_r($dados);
echo "</pre><hr>";

$writer = new XLSXWriter();
$writer->writeSheet($dados);
$writer->writeToFile('output.xlsx');
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


$data = array(
array('year','month','amount'),
array('2003','1','220'),
array('2003','2','153.5'),
);

$writer = new XLSXWriter();
$writer->writeSheet($data);
$writer->writeToFile('output.xlsx');
  -->