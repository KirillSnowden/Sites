
<title>File Upload</title>
<?php
include('header.php');
include('footer.php');
?>
<meta charset="utf-8">
<?php
$server = localhost;
$username = 'a0682981_user';
$password = 'Axe323232';
$dbname = 'a0682981_user';
$charset = 'utf8';

$connection = new mysqli($server, $username, $password, $dbname);

if($connection->connect_error){
	die("Ошибка соединения".$connection->connect_error);
}

if(!$connection->set_charset($charset)){
	echo "Ошибка установки кодировки UTF8";
}
?>
<html>
<head>
<meta charset="utf-8">
<title>Загрузка картинки в БД</title>
</head>

<body>
<div style="color: black; font-family: Roboto-Regular; margin-top: 8%; margin-left: 25.5%; width: 50%; min-width: 15%; height: 35%;  padding: 20px;">
<form action="fileinj2.php" method="post" enctype="multipart/form-data">
	
<h1>Выберите фото для загрузки</h1>
<div style="margin-top: 5%;">
<input type="file" name="img_upload" class="form-control"  >
<br>
<input type="submit" name="upload" value="Загрузить" class="btn btn-primary">
<?php
if (isset($_POST['upload'])) {
    $file = $_FILES['img_upload']['name'];
    if (preg_match("/php/i", "$file")) {
        echo "<br>";
        echo "<br>";
        echo "<h3>Невозможно загрузить данный файл</h3>";
        include "footer.php";
        die();
    } else {
        $img_type = substr($_FILES['img_upload']['type'], 0, 5);
        //$img_size = 2*1024*1024;
        if (!empty($_FILES['img_upload']['tmp_name']) and $img_type === 'image') {
            $img = addslashes(file_get_contents($_FILES['img_upload']['tmp_name']));
            $connection->query("INSERT INTO `user`(`path`) VALUES ('$img')");
            header('Location: http://site.ru/index1.php' );
            exit( );
        }
    }
}
?>

</div>
</form>
</div>
</body>
</html>

