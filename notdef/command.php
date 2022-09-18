<title>Command Injection</title>
<?php
include("header.php");
include("footer.php");
?>
<title>Command Injection</title>

<div
    style="color: black; font-family: Roboto-Regular; margin-top: 8%; margin-left: 25.5%; width: 50%; min-width: 15%; height: 35%; background: white; padding: 20px;">
    <form action="" method="GET">
        <h1>Послать команду ping</h1>
        <div style="margin-top: 5%;">
            <input type="text" name="ping" class="form-control" placeholder="Введите IP-адресс">
            <br>
            <button type="submit" class="btn btn-primary"
                style="background-color: black; font-size: 20px; width: 15%;">Отправить</button>
            <?php
        if (isset($_GET["ping"])) { ?>
            <br>
            <hr />
            <h3>Результат</h3>
            <b>
                <?php
          $a = system('ping -c 4 '.$_GET["ping"]);
          }
        ?>
            </b>
        </div>
    </form>
</div>
