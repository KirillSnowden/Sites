<title>File Inclusion</title>
<?php
include('header.php');
include('footer.php');
?>
<style>
h2{
        margin-top: 10%;
        text-align:  center;
}
    h3{
        color: white;
    }
</style>
    <div style="color: black; font-family: Roboto-Regular; margin-top: %; margin-left: 20%; width: 70%; min-width: 15%; height: 35%; background: white; padding: 20px;">
    <div style="margin-top: 7%;">
        <?php
        echo "<h3>asdasdasd0</h3>";
        if (isset($_GET['file'])) {
        $file = $_GET['file'];
        include "$file";
}
?>
        </div>
        <form>
        <div style="margin-top: 10%; margin-left: 30%;">
        <a href="fileinc.php?file=Google.php" class="btn btn-primary" style="font-size: 20px; width: 15%;">Google</a>
        <a href="fileinc.php?file=Yandex.php" class="btn btn-primary" style="font-size: 20px; width: 15%;">Yandex</a>
        <a href="fileinc.php?file=Yahoo.php" class="btn btn-primary" style="font-size: 20px; width: 15%;">Yahoo!</a>
        </div>
        </form>
        <div>
    </div>
</div>








