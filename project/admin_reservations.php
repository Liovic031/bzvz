<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Rezervacije</title>
    <link rel="stylesheet" href="css/style_admin.css"> <!-- Prilagodite put do vašeg CSS-a -->
</head>

<body>

    <!-- Header -->
    <header>
        <h1>Dobrodošli, admin!</h1>
        <a href="logout.php">Odjava</a> <!-- Dodajte link za odjavu, možete stvoriti logout.php skriptu -->
    </header>

    <!-- Main content -->
    <section class="reservations">
        <h2>Popis rezervacija</h2>

        <?php
        // Spajanje na bazu podataka
        $servername = "localhost";
        $username = "admin";
        $password = "12345";
        $dbname = "book_db";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Upit za dohvaćanje rezervacija iz tablice book_form
        $sql = "SELECT * FROM book_form";
        $result = $conn->query($sql);

        // Prikaz rezervacija
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="reservation-item">';
                echo '<p>ID: ' . $row["id"] . '</p>';
                echo '<p>Ime: ' . $row["name"] . '</p>';
                echo '<p>Email: ' . $row["email"] . '</p>';
                echo '<p>Broj telefona: ' . $row["phone"] . '</p>';
                echo '<p>Adresa: ' . $row["address"] . '</p>';
                echo '<p>Lokacija: ' . $row["location"] . '</p>';
                echo '<p>Broj gostiju: ' . $row["guests"] . '</p>';
                echo '<p>Dolazak: ' . $row["arrivals"] . '</p>';
                echo '<p>Odlazak: ' . $row["leaving"] . '</p>';
                echo '</div>';
            }
        } else {
            echo "Nema rezervacija.";
        }

        $conn->close();
        ?>

    </section>

</body>

</html>
