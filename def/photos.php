<title>Photos</title>
<?php include ("header.php")?>
<style>
.asd{
    margin-bottom: 10%;
}
    img {
  border-radius: 5%;
  margin: 0.4em;
}
</style>
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

<div name="asd" style="color: black; font-family: Roboto-Regular; margin-top: 5%; margin-left: 30%; width: 50%; min-width: 15%; height: 35%; background: white; padding: 20px; ">

<?php
$query = $connection->query("SELECT path FROM user");
while($row = $query->fetch_assoc()){
    $show_img = base64_encode($row['path']);?>
    <img src="data:image/jpeg;base64, <?=$show_img ?>" width="200px" height="200px" style="boreder-radius: 10px">

<?php } ?>
</div>

<?php include ("footer.php")?>