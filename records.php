<?php
require 'db_connect.php';

// Fetch all records from the database
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Designation</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>".$row["id"]."</td><td>".$row["name"]."</td><td>".$row["designation"]."</td></tr>";
    }
    echo "</table>";
} else {
    echo "No records found";
}
?>