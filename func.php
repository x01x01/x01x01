<?php
/*Написать функцию которая будет определять количество посителей зашедших  через апи вк
и выводить в room.php
Написать функцию listing которая будет определять количество посетителей в комнате
*/
require_once ('bd.php');

//Функция которая определяет время и меняет картинку зависимо от время суток.
//Подумать на счет картинки дня(как то не очень)

function  back_size(){
	  $date = date('H:i');
       if($date >'18:00' AND $date >'07:00'){
            echo "city_night.css";
        }else{
           echo "city.css";
        }
 }

/* Функция по выводу сообщения (возможно и не нужная по скольку будет юзаться апи вк коментарии)*/
function result(){                                                                                          
$res = mysql_query("SELECT*FROM `message` ")or die ("Neyda4a");

while($row = mysql_fetch_array($res)){
 //echo $row['id'].' '. $row['nickname'].' '.$row['message'].' '.$row['date'].'</br>';
    //echo  "$row['date'].''. $row['nickname'].''.$row['message'].'</br>'";
    echo "<li id=\"".$row['date']."\">" .$row['message']."</li>";
}
}

// Функция которая заносит сообщение в БД.
/*
$texts= $_POST['vod'];
$date = date('H:i');

if(ISSET($texts,$date))
{
  texts($texts,$date);  
}


function texts($text,$date){  
   $res = mysql_query("INSERT INTO `message`(`message`,`date`)VALUES('$text','$date')");
}
*/

//Функция которая выводит адресса местанахождения заведений.


if (isset($id_adress)){ $id_adress= $_POST['id_adress'];}

function adress ($adress)
{

    $res = mysql_query("SELECT `adressat` FROM `adress` WHERE id_adress = '$adress' ") or die('Nerabotaet');

    $row = mysql_fetch_array($res);
     $rez = $row['adressat'];

    print($rez);


}

function listing(){

}

//Функция которая принимает параметры  и выводит определенный стиль в room.php

if (isset($map)){ $map= $_POST['map'];}
function map($map){

    switch($map){
        case '1':
            echo"1.css";
            break;
    }

}

//Функция по выбору категорий и мест (клубы, рестораны)
if (isset($map_list)){ $map_list= $_POST['map_list'];}
//var_dump($map_list);
//map_list($map_list);
function map_list($map_list){

    $res = mysql_query("SELECT `name` FROM `list_map` WHERE rang_category='$map_list' ");

    while($row = mysql_fetch_array($res)){
       echo $row['name'];
    }
}









