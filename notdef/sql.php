<title>SQL Injection</title>
<?php
include('header.php')
?>
<?php
include('footer.php')
?>
<div
    style="color: black; font-family: Roboto-Regular; margin-top: 8%; margin-left: 25.5%; width: 50%; min-width: 15%; height: 35%; background: white; padding: 20px;">
    <form action="" method="GET">
        <h1>Поиск пользователя по ID</h1>
        <div style="margin-top: 5%;">
            <input type="text" name="ID" class="form-control" placeholder="Введите ID">
            <br>
            <button type="submit" class="btn btn-primary"
                style="background-color: black; font-size: 20px; width: 15%;">Отправить</button>
            <?php
             if (isset($_GET["ID"])) { ?>
            <br>
            <hr />
            <h3>Результат</h3>
            <b>
                <div style="margin-top: 2%; background-color: #f5f5f5; border-radius: 10px; width: 100%; height: %;">
                    <br>
                    <div style="margin-left: 2%; margin-top: %; ">
            <?php
            $link = new mysqli("localhost", "a0682981_user", "Axe323232", "a0682981_user");
            $id = $_GET['ID'];
            $sql = ("SELECT * FROM users WHERE ID = '$id'");
            $result = mysqli_query($link, $sql);
            while ($row = mysqli_fetch_array($result)) {
                $id = $row['ID'];
                $name = $row['Login'];
                $job = $row['Job'];
                echo "<h3>ID: $id  </h3>";
                echo "<h3>Имя: $name  </h3>";
                echo "<h3>Должность: $job  </h3>";
               }
            }
            ?>
            <br>
            </div>
            </b>
        </div>
    </form>
</div>









