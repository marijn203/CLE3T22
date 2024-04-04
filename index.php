<?php
/** @var mysqli $db */
session_start();

require_once "includes/database.php";

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch all locations from the database
$query = "SELECT * FROM locations";
$result = mysqli_query($db, $query);

$locations = []; // Initialize an array to store locations
if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $locations[] = $row; // Store each location in the array
    }
} else {
    echo "Error: " . mysqli_error($db);
}

//hier moet je naar andere pagina om search results op te zoeken
if (isset($_GET['submit'])) {
    // Debugging: Check if condition is met
    echo "Form is submitted!";
    // Redirect to search page
    header('Location: pages/search.php?search=' . $_GET['search']);
    exit; // Ensure script execution stops after redirection
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <script type="application/javascript" src="js/main.js"></script>
    <title>Audioscape</title>
</head>
<body>
    <nav>
<!--        dit is het logo     -->
        <div id="navLogo">
            <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
        </div>
        <form action="" method="get">
            <div id="navSearch">
                <form action="pages/search.php" method="get">
                    <input type="text" id="search" name="search" placeholder="Search...">
                    <input type="submit" id="submit" name="submit" value="Search">
                </form>
            </div>
            <div id="navFiller">
            </div>
        </form>
    </nav>

    <main>
        <div id="mainImages">
    <!--        dit zijn de fotos voor verschillende zorg instellingen      -->
            <?php
            // Display all locations
            foreach ($locations as $location) {
                echo '<div id="mainImage">';
                echo '<a href="pages/location.php?id=' . $location['id'] .'"><img src="./images/' . $location['picture'] . '"  alt="Logo"></a>';
                echo '<p>' . $location['name'] . '</p>';
                echo '</div>';
            }
            ?>
        </div>
    </main>

    <footer>
        <!--        dit is het logo     -->
        <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
<!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>
