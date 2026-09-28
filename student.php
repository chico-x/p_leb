<html>
<body>
    <form action="Student.php" method="GET">
        Enter your roll number:
        <input type="text" name="rollno">
        <input type="Submit" name="Submit">
    </form>

    <?php
    if ($_GET) {
        $rollno = $_GET['rollno'];
        $db = mysqli_connect("localhost", "root", "", "devanaaahhhh");
        if (!$db) {
            die("Connection failed: " . mysqli_connect_error());
        }

        $rs = mysqli_query($db, "Select * from student where rollno = '$rollno'");
        echo "Mark List<br><br>";
        echo "<table border='2'>";
        while ($row = mysqli_fetch_row($rs)) {
            echo "<tr>";
            echo "<td>Roll No</td>";
            echo "<td>" . $row[0] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Student Name</td>";
            echo "<td>" . $row[1] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Mark</td>";
            echo "<td>" . $row[2] . "</td>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>Grade</td>";
            echo "<td>" . $row[3] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        mysqli_close($db);
    }
    ?>
</body>
</html>
