<?php
include("header.php");
include("footer.php");
?>
<div  style="color: black; font-family: Roboto-Regular; margin-top: 3%; margin-left: 24%; width: 55%; min-width: 15%; height: 68%; background: white; padding: 20px;  ">
<h1>Оставьте свой комментарий:</h1>
<form name="messageadd" method="get"> 
<p><h3>Имя:</h3> <input name="username" size=65 style="width: 100%;"></p> 
<p><h3>Сообщение:</h3>  <textarea cols="66" name="message" rows="10" wrap="virtual" style="width: 100%;"></textarea></p> 
<p><input name="button" type="submit" value="Отправить" style="background-color: black; color: white; font-size: 150%; border-radius: 2.5px;"> </p> 
</form> 

<?php 
if ($_GET['button'] == 'Отправить') { ?> 
 <hr/> 
 <h3>Результат</h3> 
 <b><?= $_GET['username'] ?></b> 
 <br>
 <b><?= $_GET['message'] ?></b> 
 <?php 
} 
?> 
</form> 
</div>
     