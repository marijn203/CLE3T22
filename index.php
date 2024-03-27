<?php
session_start();

require_once "includes/database.php";

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

//hier moet je naar andere pagina om search results op te zoeken
if (isset($_GET['submit'])) {
    // Debugging: Check if condition is met
    echo "Form is submitted!";
    // Redirect to search page
    header('Location: pages/search.php?search=');
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
            <div id="mainImage">
                <a href="pages/location.php"><img src="images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
            <div id="mainImage">
                <a href="pages/location.php"><img src="images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
            <div id="mainImage">
                <a href="pages/location.php"><img src="images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
            <div id="mainImage">
                <a href="pages/location.php"><img src="images/Bartiméus.png" alt="Logo"></a>
                <p>Bartiméus Rotterdam</p>
            </div>
        </div>
    </main>

    <footer>
        <!--        dit is het logo     -->
        <a href="index.php"><img src="images/logo.png" alt="Logo"></a>
<!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>
