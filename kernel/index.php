<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require __DIR__."/../vendor/autoload.php";
use App\Container\Container;
use App\Controller\BlogController;

$config=yaml_parse(file_get_contents(__DIR__."/../config/services.yaml"));



$container=new Container();

foreach ($config['services'] as $service=>$arguments )
{

    $container->set($service,$arguments['arguments']??[],$config['services'][$service]['class']);
}

$blog = $container->get(BlogController::class);

$blog->pera();



