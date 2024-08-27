<?php
    $file = fopen('data.txt','r');
    if($file){
        while(($line = fgets($file)) !== false){
            echo $line . "<br>";
        }
        fclose($file);
    }else{
        echo "Faylni ochishda xatolik bor";
        return;
    }

?>