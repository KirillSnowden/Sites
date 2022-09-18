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
            header('Location: http://a0682981.xsph.ru/def/photos.php' );
            exit( );
        }
    }
}
?>