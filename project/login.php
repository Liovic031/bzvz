<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <div id="main">
        <h1>Login</h1>
        <div id="login">
            <hr/>
            <form action="login.php" method="post">
                <label>Username:</label>
                <input type="text" name="username" placeholder="Username" required="required"><br/><br />
                <label>Password:</label>
                <input type="password" name="password" placeholder="Password" required="required"><br/><br />
                <input type="submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>

<?php
session_start();

$servername = "localhost";
$username = "admin";
$password = "12345";
$dbname = "book_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = mysqli_real_escape_string($conn, $_POST["username"]);
    $inputPassword = mysqli_real_escape_string($conn, $_POST["password"]);

    $sql = "SELECT uid FROM korisnici WHERE username = '$inputUsername' AND password = '$inputPassword'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $inputUsername;
        header("Location: admin_reservations.php");
        exit();
    } else {
        echo "Korisnik ne postoji ili pogrešna lozinka";
    }
}

$conn->close();
?>
