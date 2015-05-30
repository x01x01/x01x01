<?php require_once ('func.php');?>
<html>
<head>
    <title>Первый сайт :)</title>
 <script src="js/jquery-2.1.3.min.js"></script>
</head>
<body>
<div id="content">
        <ul id="message"> 
        <?php result();?>
        </ul>
     </div>
<div class='menu'>
        <table>
            <form action='' method="post">
                <tr>
                <td>
                    Введите сообщение:
                    <textarea name="vod" WRAP="virtual" COLS="60" ROWS="4"></textarea>
                    <input name="button" type="submit" value="Enter">
                </td>
            </tr>
            </form>
        </table>
       </div>
</body>
</html>
