<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "testodc";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST) == true) {
    // To-Do Check the passed values
    // Insert
    $insertQuery = "INSERT INTO `evenement`(`titre`, `nom`, `prenom`, `date_naissance`, `s_familiale`, `tel`,
                    `email`, `profession`, `adresse`, `ville`, `pays`, `adresse_suite`, `code_postal`) VALUES ('".mysqli_real_escape_string($conn, $_POST['titre']).
                    "','".mysqli_real_escape_string($conn, $_POST['nom'])."','".mysqli_real_escape_string($conn, $_POST['prenom']).
                    "','".mysqli_real_escape_string($conn, $_POST['date_naissance'])."','".mysqli_real_escape_string($conn, $_POST['s_familiale']).
                    "','".mysqli_real_escape_string($conn, $_POST['tel'])."','".mysqli_real_escape_string($conn, $_POST['email']).
                    "','".mysqli_real_escape_string($conn, $_POST['profession'])."','".mysqli_real_escape_string($conn, $_POST['adresse']).
                    "','".mysqli_real_escape_string($conn, $_POST['ville'])."','".mysqli_real_escape_string($conn, $_POST['pays'])."','', 0)";
    if ($conn->query($insertQuery) === TRUE) {
        header('location:index.php?success=1');
    } else {
        echo "Error: " . $insertQuery . "<br>" . $conn->error;
    }

}

$conn->close();