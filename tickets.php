<?php
include("config.php");

$sql = "SELECT * FROM parking_tickets";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tiket Pelanggaran</title>
</head>
<body>
    <h1>Tiket Pelanggaran</h1>

    <?php
    if ($result->num_rows > 0) {
        echo "<table border='1'>";
        echo "<tr><th>Ticket Number</th><th>License Plate</th><th>Violation</th><th>Timestamp</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>{$row['ticket_number']}</td>";
            echo "<td>{$row['license_plate']}</td>";
            echo "<td>{$row['violation']}</td>";
            echo "<td>{$row['timestamp']}</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No tickets found</p>";
    }

    $conn->close();
    ?>
</body>
</html>
