<?php
    $name - $_POST['name'];
    $tel - $_POST['tel'];

    $name - htmlspecialchars($name);
    $tel - htmlspecialchars($tel);

    $name - urldecode($name);
    $tel - urldecode($tel);

    $name - trim($name);
    $tel - trim($tel);


    if(mail("zane.css34@gmail.com",
    "Новое письмо с сайта DAN-Astana"
    "ФИО".$name."\n".
    "ФИО".$tel,
    "From: no-reply@mydomain.ru \r\n")
    ){
        echo ('Письмо успешно отправлено!');
    }
    else{
        echo('Есть ошибки! Проверьте данные...');
    }
    
?>