<?php
require_once "./dog.php";


$dog = new dog('わん');
// var_dump($dog);

if(isset($dog)){    
    echo'<br>';
    $dog_name = $dog->set_name('なまえ');
    if($dog_name){
        echo $dog->get_name();
    }else{
        echo 'nameプロパティーに値はありません。';
    }

    echo $dog->bark();
    echo dog::TYPE;


}