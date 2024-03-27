<?php
/** @var mysqli $db */
session_start();

require_once "../includes/database.php";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Check if form is submitted
if (isset($_GET['submit'])) {
    // Debugging: Check if condition is met
    echo "Form is submitted!";

    // Redirect to search page
    header('Location: search.php?search=' . urlencode($_GET['search']));
    exit; // Ensure script execution stops after redirection
}

// Fetch information from the database based on the search query
if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
    $query = "SELECT * FROM locations WHERE name LIKE '%$search_term%'";
    $result = mysqli_query($db, $query);

    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['name'] . "<br>";
            }
        } else {
            echo "No results found.";
        }
        mysqli_free_result($result);
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

// Close connection

mysqli_close($db);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/style.css">
    <script type="application/javascript" src="../js/main.js"></script>
    <title>Audioscape</title>
</head>
<body>
    <nav>
        <!--        dit is het logo     -->
        <div id="navLogo">
            <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
        </div>
        <div id="navSearch">
        <form action="" method="get">
            <input type="text" id="search" placeholder="Search...">
            <input type="submit" id="submit" name="submit">
        </form>
        </div>
        <div id="navFiller">
        </div>
    </nav>

    <main>
        <div id="mainImages">
            <!--        dit zijn de fotos voor verschillende zorg instellingen      -->
            <div id="mainImage">
                <a href="location.php"><img src="../images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
            <div id="mainImage">
                <a href="location.php"><img src="../images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
            <div id="mainImage">
                <a href="location.php"><img src="../images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
            <div id="mainImage">
                <a href="location.php"><img src="../images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
        </div>
    </main>
    <footer>
        <!--        dit is het logo     -->
        <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
        <!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>
