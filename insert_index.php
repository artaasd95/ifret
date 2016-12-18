<?php
    require 'connect.php';
    echo $db;
    $term="fill";
    $doc_num=5;
    $positin[0]=15;
    $position[1]=40;
    
    $record['term']=$term;
    $record['document']=$doc_num;
    $position['position']=$position;
    $result=$db->invindex->insert($record);
    if ($result)
    {
        echo "done";
    }


?>