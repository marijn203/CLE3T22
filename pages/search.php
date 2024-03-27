<?php
if (isset($_GET['submit'])) {
    //je moet info uit database halen om de goede locaties te tonen met search result
}


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
    <title>Document</title>
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
