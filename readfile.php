<?php
session_start();
//if(!isset($_SESSION["filepath"]))
//{
//    header("Location:./index.html");
//}
    $pointer=0;
    $file="./test.txt";
    $file=$_SESSION["filepath"];
    echo "$file";
    $content=file_get_contents($file);
    
    echo "\r\n";
    //$tokens= token_get_all($content);
    //foreach ($tokens as $token){
    //    if (is_array($token)) {
    //        echo "$token[1].\r\n" , PHP_EOL;
    //        $alltokens[$pointer]=$token[1];
    //        $pointer++;
    //    }
    //}
    
    $prgct=preg_split('/[,.\s;]+/', $content);
    var_dump($prgct);
    
    
?>