<title>File Inclusion</title>
<?php
include('header.php');
include('footer.php');
?>
<style>
h2{
        margin-top: 10%;
        text-align:  center;
        margin-right: 10%;
}

</style>

<div style="color: black; font-family: Roboto-Regular; margin-top: %; margin-left: 20%; width: 70%; min-width: 15%; height: 35%; padding: 20px;">
    <div style="margin-top: 7%;">
        <br>
        <br>
        <br>
        <?php
function checkparam($filter)
{
    $filter = preg_replace("/[^a-z]/i", "", $filter);
    return $filter;
}
if (isset($_GET['file'])) {
    $symbols = array("../", "..", ".", "/", "%", "");
    $file = $_GET['file'];
    $file = str_replace($symbols);
    $file = checkparam($_GET['file']);
    //echo $file;
    if($file === Google || $file === Yandex || $file === Yahoo){
    echo "";
    }
    else{
        echo "<h2>Нельзя открыть данный файл</h2>";
        die();
    }
    $file = $file . ".php";
    include "$file";
}
?>
        </div>
        <form>
        <div style="margin-top: 10%; margin-left: 30%;">
        <a href="fileinc.php?file=Google" class="btn btn-primary" style="font-size: 20px; width: 15%;">Google</a>
        <a href="fileinc.php?file=Yandex" class="btn btn-primary" style="font-size: 20px; width: 15%;">Yandex</a>
        <a href="fileinc.php?file=Yahoo" class="btn btn-primary" style="font-size: 20px; width: 15%;">Yahoo!</a>
        </div>
        </form>
        <div>
    </div>
</div>








