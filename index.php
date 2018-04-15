<?php

$numb = 10;

$users = array('name' => 'Anton', 'surname' => 'Tutunnik');

$users[1] = 'Mykola';

unset($users[1]);

$sum = count($users);

echo $sum;

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

