<?php require_once "vendor/php-activerecord/php-activerecord/ActiveRecord.php";
require_once "config.php";

if($_GET){
    $actor = Actor::find($_GET['id']);
    $actor->delete();
    header('Location: delete.php');
}else{echo "kd o get ?";}