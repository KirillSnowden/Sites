<title>File Injection</title>
<?php
include ("header.php")
?>
<div  style="color: black; font-family: Roboto-Regular; margin-top: 8%; margin-left: 25.5%; width: 50%; min-width: 15%; height: 35%; background: white; padding: 20px; /* Поля вокруг текста */ border-radius: 8px;border: 2px solid black;">
    <form action="upload.php" method="POST">
     <h1>Выберите файл для загрузки</h1>
     <div style="margin-top: 5%;">
     <input type="file" name="img" class="form-control"  placeholder="Вставте файл" style=" ">
     <br>
     <button type="submit" class="btn btn-primary" style="background-color: black; font-size: 20px; width: 100%;">Отправить</button>
     </div>
     </form>
     
     
<?php
include ("footer.php")
?>
