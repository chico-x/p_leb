<html>
<body>
    <form method="GET" action="Sum.php">
        Enter the number <input type="text" name="t1"><br>
        Enter the number <input type="text" name="t2"><br>
        <input type="Submit" value="Check">
    </form>
</body>
</html>

<?php
if ($_GET) {
    $n = $_GET['t1'];
    $n1 = $_GET['t2'];
    $t = $n + $n1;
    echo $t;
}
?>
