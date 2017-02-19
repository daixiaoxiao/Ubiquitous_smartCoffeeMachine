<?php
//include and use myPHPiFace library
use Pkj\Raspberry\PiFace\PiFaceDigital;
require 'myphpiface/vendor/autoload.php';

$dev = PiFaceDigital::create();
// Run once. (clear all outputs)
$dev->init();

//turn on RELAY

sleep(15);
$dev->getRelays()[0]->turnOn(); 
sleep(55);
$dev->getRelays()[0]->turnOff();
sleep(10);
$dev->getRelays()[1]->turnOn(); 
sleep(15);
$dev->getRelays()[1]->turnOff();
