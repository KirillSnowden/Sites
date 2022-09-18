<html>
<meta charset="utf-8">
<head>
<link rel="icon" href="new.png" type="image/png">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Регистрация</title>
<style>
.new{
  margin-right: 40%;
  margin-left: 5%;
}
h6{
  font-family: Roboto-Regular;
  color: grey;
}
.underline-one {
  padding: 10px;
  color: black; /* Цвет обычной ссылки */
  position: relative;
  cursor: pointer;
  text-decoration: none; /* Убираем подчеркивание */
}
.underline-one:after {
  content: "";
  display: block;
  position: absolute;
  right: 0;
  bottom: -3px;
  width: 0;
  height: 2px; /* Высота линии */
  background-color: black; /* Цвет подчеркивания при исчезании линии*/
  transition: width 0.5s; /* Время эффекта */
}
.underline-one:hover:after {
  content: "";
  width: 100%;
  display: block;
  position: absolute; 
  left: 0;
  bottom: -3px;
  height: 2px; /* Высота линии */
  background-color: black; /* Цвет подчеркивания при появлении линии*/
  transition: width 0.5s;  /* Время эффекта */
}

@font-face { 
  font-family: 'Roboto-Regular'; 
  src: url('Roboto-Regular.ttf'); 
}
body{
  background: white; /* Цвет фона */
  color: #fc0; /* Цвет текста */
    
}
#header{ 
  width: 100 px;  
  height: фон px;  
  background-color: grey; 
  margin-bottom: 20 px;  
  margin-top: 2%;
  padding: 10px;
  border-radius: 10px;
  margin-right: 2%;
  margin-left: 25%;
}
#h1{
  background-color: white;
}
a{
  text-decoration: none;
  color: white;
  font-size: 200%;
}
#form-label1{ 
  font-weight: bold;
}
#container{
  margin-top: 30%;
}
#123{
  max-height: 150px;
  width: 50px;
  margin: 10%;
  padding: 10%;
  margin-left: 5%;
  margin-top: 5%;
}
#footer {
  min-height: 70px;
  position: fixed; /* Фиксированное положение */
  left: 0; bottom: 0; /* Левый нижний угол */
  padding: 10px; /* Поля вокруг текста */
  background: black; /* Цвет фона */
  color: white; /* Цвет текста */
  width: 100%; /* Ширина слоя */

}
</style>
</head>
<body>

<div class="123" style="background-color: white; width: 100%;">

<div style=" padding: 0.6%; margin-left: 10%">
    <div style="margin-right: 50%; aling: ;">
    </div>
    <div>

    <img src="red.png" width="40" height="48">
    &nbsp
    <a href="http://a0682981.xsph.ru/def/command.php" class="btn btn-primary" style="font-size: 20px; width: 7%;">Switch</a>
    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp   
    <a href="command.php" class="underline-one" align="right" style="color: black; font-family: Roboto-Regular;  text-decoration: none; font-size: 20 px;">Command Injection</a>
    <a href="fileinc.php" class="underline-one" style="color: black; font-family: Roboto-Regular;  text-decoration: none; font-size: 20 px;">File Inclusion</a>
    <a href="sql.php" class="underline-one" style="color: black; font-family: Roboto-Regular;  text-decoration: none; font-size: 20 px;">SQL</a>
    <a href="fileinj.php" class="underline-one" style="color: black; font-family: Roboto-Regular;  text-decoration: none;">File Upload</a>
    <a href="xss.php" class="underline-one" align="right" style="color: black; font-family: Roboto-Regular;  text-decoration: none;">XSS</a>
</div>
</div>
</div>