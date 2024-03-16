<?php
use SebastianBergmann\Timer\Timer;
require 'vendor/autoload.php';

$faker = Faker\Factory::create();

$timer = new Timer();
$timer->start();

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Olá, meu nome é '.$faker->name().'</h1> <br>');
$mpdf->WriteHTML('<h2>Email:'.$faker->email().'</h2> <br>');
$mpdf->WriteHTML('<h2>Celular:'.$faker->phoneNumber().'</h2> <br>');
$mpdf->WriteHTML(''.$faker->text().'');
$mpdf->Output();

$duration = $timer->stop();

echo''.$duration.'';
