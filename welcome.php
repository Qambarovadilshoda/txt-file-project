<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $file = fopen('data.txt','a');

    $name = $_POST['name'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    if(!empty(preg_match('/^[A-Za-z]+$/',$name))&& !empty(filter_var($age,FILTER_VALIDATE_INT)) && !empty(filter_var($email,FILTER_VALIDATE_EMAIL)) ){
        $text = 'Salom, ' . $name . ' !Sizning yoshingiz ' . $age . ' da.Emailingiz: ' . $email ."\n" ;
        fwrite($file,$text);
        echo $text;
    }else{
        die("Forma to'ldirishda xatolik bor.Ma'lumotlaringizni tekshirib qayta kiriting!");
    }
    fclose($file);
}