<title>File Upload</title>
<?php
include("header.php");
include("footer.php");
?>
<br>
<br>
<div style="color: black; font-family: Roboto-Regular; margin-top: 6%; margin-left: 25.5%; width: 50%; min-width: 15%; height: 35%; background: white; padding: 20px;">
<form action="fileinj.php" method="post" enctype="multipart/form-data">
	
<h1>Выберите фото для загрузки</h1>
<div style="margin-top: 5%;">
<input type="file" name="img" class="form-control"  >
<br>
<input type="submit" name="upload" value="Загрузить" class="btn btn-primary">
<?php
if(!empty($_FILES['img'])){
    $file = $_FILES['img'];
    $name = $_FILES["img"]["name"];
    $path = "/home/a0682981/domains/a0682981.xsph.ru/public_html/notdef/files/$name";
    if(move_uploaded_file($file['tmp_name'], $path)){
    }
    ?>
<br>
<br>
<a href="<?php echo "http://a0682981.xsph.ru/notdef/files/$name" ; ?>" style="color: black;">Перейдите по ссылке, чтобы посмотреть вашу фотографию</a>"
<?php 
 }
?>

