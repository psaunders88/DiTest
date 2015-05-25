<?php

require 'vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use PSaunders88\DiTest\Manager\Manager;

$container = new ContainerBuilder();
$loader = new YamlFileLoader($container, new FileLocator(__DIR__));
$loader->load('services.yml');

/* @var $MathManager Manager */
$MathManager = $container->get('psaunders_manager');

// Use the add function
$addResult = $MathManager->add(100, 12);

echo "The add result is: $addResult \n";

// Use the subtract function
$subtractResult = $MathManager->substract(100, 12);

echo "The subtract result is: $subtractResult \n";