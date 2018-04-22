<?php

$numb = 10;

//Create array
$users = array('name' => 'Anton', 'surname' => 'Tutunnik');

//Add element to array
$users[1] = 'Mykola';

//Delete element from array
unset($users[1]);

//Array lenght
$sum = count($users);

//Two-Dimensional array
$array = array(
    array('name' => 'Bob', 'age' => '20'),
    array('name' => 'John', 'age' => '30'),
    array('name' => 'Doe', 'age' => '30'),
    array('name' => 'Anna', 'age' => '30'),
);



echo '<pre>';
print_r($array[0]['name']);
echo '<pre>';


for ($i = 0; $i < count($array); $i++){
    
    echo $array[$i]['name'] . ' ' . $array[$i]['age'] . '<br>' ;

}

echo '<br>';

foreach ($array as $key => $users) {
    echo $key;
    echo $users['name'] . '<br>';
}

echo '<br>';

foreach ($array as $users) {
    var_dump($users);
}

//Explode разделяет строку на части
$result = explode(',', 'Kartoffel, Soßen, Schinken, Wein usw.');

//Значение параметра в функции по умолчанию
function myFunction($name = "John"){
    echo 'Hello ' . $name . '<br>';
}

myFunction();
myFunction("Mykola");

// Доступ к глобальным переменным внутри функции
$name1 = 'Alex';
$name2 = 'Viktor';

function test(){
    
    $name3 = 'Wladimir';
    
    // Способ №1
    global $name1;
    echo 'Privet ' . $name1 . '<br>';
    
    // Способ №2 используя спец. массив $GLOBALS 
    echo 'Privet ' . $GLOBALS['name2'] . '<br>';
}

test();

// Передача аргументов по ссылке 6 - 21:40
function test2(&$arg){
    $arg = 5;
}

$beta = 10;

test2($beta);

echo 'Beta = ' . $beta . '<br>';

//Статические переменные
function howManyTimes(){
    static $a = 0;
    echo ++$a . '<br>';
}

howManyTimes();
howManyTimes();
howManyTimes();

// Рекурсивная функция Ex. 6, Time 26:20
var_dump('Is 44 Array? ' . is_array(44));
var_dump('Is $array Array? ' . is_array($array ));

// Встроенные возможности Ex. 7 
$arr1 = [1,2,3,4,5,6,7,8];
$arr2 = array(1,2,3,4,5,6,7,8);


$a;
$b = 4;

var_dump('Задано ли значение $a ' . isset($a));
var_dump('Задано ли значение $a ' . isset($b));

echo ('Считаеться ли переменная пустой? ' . empty($a));

//get_defined_vars
//При помощи её мы можем получить все переменные в данном месте программы
echo '<pre>';
print_r (get_defined_vars());
echo '</pre>';


// Форматирование строк
$city = 'London';
$percent = 22 / 41 * 100;
$total = 1000;

echo $percent . '<br>'; //53.658536585366

$format = 'По данным статистики %.2f из %d опрошенных в городе %s'; 
printf($format, $percent, $total, $city); //Ex. 7 -> 14:50