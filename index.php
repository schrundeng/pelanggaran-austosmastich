<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Tiket Pelanggaran</title>
</head>
<body>
    <h1>Sistem Tiket Pelanggaran</h1>

    <form action="ticket.php" method="post">
        <label for="license_plate">Plat Nomor:</label>
        <input type="text" id="license_plate" name="license_plate" required>
        <br>
        <label for="violation">Pelanggaran:</label>
        <input type="text" id="violation" name="violation" required>
        <br>
        <input type="submit" value="Generate Ticket">
    </form>

    <p><a href="tickets.php">Lihat semua tiket</a></p>
</body>
</html>
