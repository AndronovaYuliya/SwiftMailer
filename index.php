<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);



echo "Hola";


































//ob_start();
//echo "1";
//ob_end_flush();
//
//ob_start();
//echo "2";
//ob_end_clean();
//
//ob_start();
//echo "3";

//ob_start();
//ob_start();
//echo "2й <br>";
//ob_end_flush();
//echo "1й <br>";
//
//ob_start();
//echo "3й <br>";
//ob_end_flush();
//
//ob_end_flush();



//ob_start();
//echo "Text text text text  text text ";
//
//$content = ob_get_contents();
//ob_end_clean();
//file_put_contents("some.txt", $content);


//for ($i = 1; $i<10; $i++){
//
//    sleep(1);
//    echo $i . " ";
//    flush();
//
//}

//ob_start();
//for ($i = 1; $i<10; $i++){
//
//    sleep(1);
//    echo $i . " ";
//    echo str_pad(",4096")."\n";
//    flush();
//
//}


//Перехват буфера
//function ob_hendler($buffer, $phase){
//
//    return "Length of string '$buffer' is " . strlen($buffer);
//}
//
//ob_start('ob_hendler');
//echo "Hello world";
//ob_end_flush();


//echo get_include_path();
//include_once "test.php";
//include_once "test.php";
//require "test.php";


//$my_arr = require ("returnArr.php");
//var_dump($my_arr)

 //Auto load
//function myAutoload($className){
//    $filename = $className . ".php";
//    include_once ($filename);
//
//}
//
//spl_autoload_register('myAutoload');
//
//$obj = new MyClass();



?>