<?php
/** @var mysqli $db */
session_start();

require_once "../includes/database.php";

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

$search_results = array(); // Initialize an array to store search results

// Check if form is submitted
if (isset($_GET['submit'])) {
    // Debugging: Check if condition is met
    echo "Form is submitted!";

    // Redirect to search page
    header('Location: search.php?search=' . $_GET['search']);
    exit; // Ensure script execution stops after redirection
}

// Check if search results are available
if (isset($_GET['search'])) {
    $search_term = $_GET['search'];
    $query = "SELECT * FROM locations WHERE name LIKE '%$search_term%'";
    $result = mysqli_query($db, $query);

    if ($result) {
        while ($row = mysqli_fetch_assoc($result)) {
            $search_results[] = $row; // Store search results in an array
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
            <input type="text" id="search" name="search" placeholder="Search...">
            <input type="submit" id="submit" name="submit">
        </form>
        </div>
        <div id="navFiller">
        </div>
    </nav>

    <main>
        <div id="mainImages">
            <!--        dit zijn de fotos voor verschillende zorg instellingen      -->
            <?php
            // Display search results
            foreach ($search_results as $result) {
                echo '<div id="mainImage">';
                echo '<a href="../pages/location.php"><img src="../images/Bartiméus.png" alt="Logo"></a>';
                echo '<p>' . $result['name'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </main>
    <footer>
        <!--        dit is het logo     -->
        <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
        <!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>
