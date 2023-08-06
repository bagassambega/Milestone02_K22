<html>
<head>
    <title>All</title>
</head>
<body>
    <table>
        <thead>
            <th>No</th>
            <th>Name</th>
            <th>Alamat</th>
        </thead>
        <tbody>
            <?php
                $servername = "containers-us-west-135.railway.app";
                $dBName = "railway";
                $dBUsername = "root";
                $dBPassword = "uXKmGWFvCasGce9YGVzX";
                $dBport = "5590";
                $dBurl = "mysql://root:uXKmGWFvCasGce9YGVzX@containers-us-west-135.railway.app:5590/railway";

                $conn = new mysqli($servername, $dBUsername, $dBPassword, $dBName, $dBport);

                if (!$conn) {
                    die("Connection failed" . mysqli_connect_error());
                }

                $sql = "SELECT namaTempat, alamat FROM makanTable";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    $counter = 1;
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $counter . "</td>";
                        echo "<td>" . $row["namaTempat"] . "</td>";
                        echo "<td>" . $row["alamat"] . "</td>";
                        echo "</tr>";
                        $counter++;
                    }
                } else {
                    echo "<tr><td colspan='2'>No items found.</td></tr>";
                }

                $conn->close();

            ?>
        </tbody>
    </table>
</body>
</html>