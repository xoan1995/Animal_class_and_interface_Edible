<?php
include('animal.php');
include('Chicken.php');
include('tiger.php');
include ('Apple.php');
include('Orange.php');
//$animals=new tiger();
//$animals1=new Chicken();
//echo $animals->makeSound().'<br>';
//echo $animals1->howToEat().'<br>';
//echo $animals1->makeSound();
$animals[0] = new Tiger();
$animals[1] = new Chicken();
echo "_____Animals";
foreach ($animals as $animal) {
    echo $animal->makeSound(). '<br>';
    if ($animal instanceof Chicken) {
        echo $animal->howToEat(). ' ';
    }
}

echo "_____Fruits";
$fruits[0]=new Apple();
$fruits[1]=new Orange();
foreach ($fruits as $fruit){
    echo $fruit->howToEat().'<br>';
}

