<?php
/**
 * Created by PhpStorm.
 * User: Ander
 * Date: 03/01/2018
 * Time: 21:56
 */
require_once ('vendor/autoload.php');
$app = new \Slim\Slim();
$app->config('debug', true);
$app->get('/', function ()
{
   $sql = new Hcode\DB\Sql();

   $usr = $sql->select("SELECT * FROM tb_users");

   echo ( json_encode($usr) );
});
$app->run();