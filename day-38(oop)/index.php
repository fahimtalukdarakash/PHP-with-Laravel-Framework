<?php
require_once 'vendor/autoload.php';
use App\classes\HelloWorld;
$helloWorld = new HelloWorld();
echo $helloWorld->message;