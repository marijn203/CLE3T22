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
    } else {
        echo "Error: " . mysqli_error($db);
    }
}

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

// Error Debugging
//print_r($search_results);

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
    <title>Soundscape</title>
</head>
<body>
    <nav>
        <!--        dit is het logo     -->
        <div id="navLogo">
            <a href="../index.php"><img src="../images/logo.png" alt="Home button"></a>
        </div>
        <div id="navSearch">
        <form action="" method="get">
            <input type="text" id="search" name="search" placeholder="Search...">
            <input type="submit" id="submit" name="submit" value="Search">
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
            if ($search_results) {
                foreach ($search_results as $result) {
                    echo '<div id="mainImage">';
                    echo '<a href="../pages/location.php?id=' . $result['id'] .'"><img src="../images/' . $result['picture'] . '"  alt="' . $result['name'] . '"></a>';
                    echo '<p>' . $result['name'] . '</p>';
                    echo '</div>';
                }
            } else { ?>
                <div id="noResults">
                    <p tabindex="1">No results found</p>
                </div>
                <?php
            // Display all locations
            foreach ($locations as $location) {
                echo '<div id="mainImage">';
                echo '<a href="../pages/location.php?id=' . $location['id'] .'"><img src="../images/' . $location['picture'] . '"  alt="' . $location['name'] . '"></a>';
                echo '<p>' . $location['name'] . '</p>';
                echo '</div>';
            }
            }?>
        </div>
    </main>
    <footer>
        <!--        dit is het logo     -->
        <a href="../index.php"><img src="../images/logo.png" alt="Footer home button"></a>
        <!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>
