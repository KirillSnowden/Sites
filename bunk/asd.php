<title>File Injection</title>
<meta charset="utf-8">
<html>
<head>
<meta charset="utf-8">
<title>Загрузка картинки в БД</title>
</head>

<body>
<div style="color: black; font-family: Roboto-Regular; margin-top: 8%; margin-left: 25.5%; width: 50%; min-width: 15%; height: 35%; background: white; padding: 20px;">
<form action="asd.php" method="post" enctype="multipart/form-data">
	
<h1>Выберите фото для загрузки</h1>
<div style="margin-top: 5%;">
<input type="file" name="img_upload" class="form-control"  >
<br>
<input type="submit" name="upload" value="Загрузить" class="btn btn-primary">
<br>
<br>
<br>
<?php
    $filename = $_FILES['img_upload']['name'];
    echo $filename;
    $type = exif_imagetype($_FILES['img_upload']['name']);
    echo $type;
?>