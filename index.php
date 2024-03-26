<?php
require_once "includes/database.php";

//hier moet je naar andere pagina om search results op te zoeken
if (isset($_GET['submit'])) {
// Redirect to login page
    header('Location: pages/results_page.php');
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
        <img src="images/logo.png" alt="Logo">
        <form action="" method="get">
            <input type="text" id="search" placeholder="Search...">
            <input type="submit" id="submit" value="Search">
        </form>
    </nav>

    <main>
        <div id="mainImages">
    <!--        dit zijn de fotos voor verschillende zorg instellingen      -->
            <a href="https://trello.com/b/qZwYaU6s/cle-3"><img src="images/Placeholder.png" alt="Logo"></a>
            <a href="https://trello.com/b/qZwYaU6s/cle-3"><img src="images/Placeholder.png" alt="Logo"></a>
            <a href="https://trello.com/b/qZwYaU6s/cle-3"><img src="images/Placeholder.png" alt="Logo"></a>
            <a href="https://trello.com/b/qZwYaU6s/cle-3"><img src="images/Placeholder.png" alt="Logo"></a>
        </div>
    </main>

    <footer>
        <!--        dit is het logo     -->
        <img src="images/logo.png" alt="Logo">
<!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>
