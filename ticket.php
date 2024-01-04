<?php
include("config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $license_plate = htmlspecialchars($_POST["license_plate"]);
    $violation = htmlspecialchars($_POST["violation"]);
    $ticket_number = uniqid("TICKET");

    $sql = "INSERT INTO parking_tickets (license_plate, violation, ticket_number) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sss", $license_plate, $violation, $ticket_number);
    $stmt->execute();
    $stmt->close();

    $conn->close();

    echo "<h2>Parking Ticket</h2>";
    echo "<p><strong>Ticket Number:</strong> $ticket_number</p>";
    echo "<p><strong>License Plate:</strong> $license_plate</p>";
    echo "<p><strong>Violation:</strong> $violation</p>";
} else {
    header("Location: index.php");
    exit();
}
?>
