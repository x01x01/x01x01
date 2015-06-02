<?php
/*Сделать под ввод сообщения  с апи вк поле и вывод сообщение тоже нужно сделать поле
 *
 * */
?>

<?php require_once ('func.php');?>
<html>
<head>
    <title>Комната</title>
 <script src="js/jquery-2.1.3.min.js"></script>
    <link href="css/<?php map(1);?>" rel="stylesheet">
</head>
<body>
<div class="adress">
    <tr>
        <td>
         <?php adress(1);?>
        </td>
    </tr>
</div>
<div class="listing">
    <?php listing();?>
    sssss
</div>
<div class="content">
        <ul id="message"> 
        <?php result();?>
        </ul>
     </div>
<div>

</div>
<div class='message'>
        
       </div>
</body>
</html>
