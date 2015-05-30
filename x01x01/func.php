<?php
require_once ('bd.php');

//Функция которая определяет время и меняет картинку зависимо от время суток.
//Подумать на счет картинки дня(как то не очень)
function  back_size(){
	  $date = date('H:i');
       if($date >'18:00' AND $date >'07:00'){
            echo "<div class=\"\city_night\">
                 <img src=\"img/city_night.jpg\">
                  </div>";
        }else{
           echo "<div class=\"city\">
                <img src=\"img/city.jpg\">
                    </div>";
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

// Функция которая заносит данные в БД.
$texts= $_POST['vod'];
$date = date('H:i');

if(ISSET($texts,$date))
{
  texts($texts,$date);  
}


function texts($text,$date){  
   $res = mysql_query("INSERT INTO `message`(`message`,`date`)VALUES('$text','$date')");
}


