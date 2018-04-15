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

