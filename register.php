<html>
<body>
    <form action="self.php" method="POST">
        <h2>Registration Form</h2>
        Name: <input type="text" name="pname"><br>
        Address: <textarea rows="4" cols="25" name="adrs"></textarea><br>
        Date of Birth: <input type="date" name="dob"><br>
        Gender: 
        <input type="radio" name="gen" value="Male"> Male
        <input type="radio" name="gen" value="Female"> Female<br>
        Mobile number: <input type="text" name="mob"><br>
        <input type="Submit" value="Display">
    </form>
</body>
</html>

<?php
if ($_POST) {
    echo "<table border='2'>";
    echo "<caption>Bio Data</caption>";
    echo "<tr>";
    echo "<td>Name</td><td>" . $_POST['pname'] . "</td>";
    echo "</tr><tr>";
    echo "<td>Address</td><td>" . $_POST['adrs'] . "</td>";
    echo "</tr><tr>";
    echo "<td>Date of Birth</td><td>" . $_POST['dob'] . "</td>";
    echo "</tr><tr>";
    echo "<td>Gender</td><td>" . $_POST['gen'] . "</td>";
    echo "</tr><tr>";
    echo "<td>Mobile Number</td><td>" . $_POST['mob'] . "</td>";
    echo "</tr>";
    echo "</table>";
}
?>
