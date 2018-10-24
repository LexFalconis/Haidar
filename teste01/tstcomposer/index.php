<?php

require_once 'vendor/autoload.php';
require_once "menu.php";
    ActiveRecord\Config::initialize(function($cfg){
        $cfg->set_model_directory('models');
        $cfg->set_connections(array('development' => 
        'mysql://root:123456789@localhost/sakila'));
    });
    
$actor = new Actor();
$actor->first_name = "Alex";
$actor->last_name = "Barros";
$actor->last_update = "1988-07-01 00:00:00";
$actor->save();

echo 'Add Alex<br/><pre>';
print_r($actor);
echo '</pre><hr>';

$actor = Actor::find(1);
echo $actor->first_name;
$actor->first_name = "Penelope Old";
$actor->save();
echo "<br/>";
$actor = Actor::find(1);
echo $actor->first_name;

echo '<pre>';
print_r($actor);
echo '</pre><hr>';

$actor = Actor::find_by_last_name('Barros');
echo '<pre>';
print_r($actor);
echo '</pre>';
$actor->delete();

$actor = Actor::all();
echo '<hr><pre>';
print_r($actor);
echo '</pre><hr>';