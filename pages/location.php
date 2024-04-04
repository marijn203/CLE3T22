<?php
/** @var mysqli $db */
session_start();

require_once "../includes/database.php";

// Get location ID from the URL
if(isset($_GET['id'])) {
    $location_id = $_GET['id'];
    // Fetch location details from the database based on the ID
    $query = "SELECT * FROM locations WHERE id = $location_id";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $location = mysqli_fetch_assoc($result);
    } else {
        echo "Location not found!";
        exit; // Stop further execution if location is not found
    }
} else {
    echo "Location ID not provided!";
    exit; // Stop further execution if location ID is not provided
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
    <title>Soundscape <?php echo $location['name']; ?></title>
</head>
<body>
    <nav>
        <!--        dit is het logo     -->
        <div id="navLogo">
            <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
        </div>
        <form action="" method="get">
        </form>
        <div id="navText">
            <h1 tabindex="1"><?php echo $location['name']; ?></h1>
        </div>
        <div id="navFiller">
        </div>
    </nav>

    <main>

<!--        er moet hier een plattegrond komen met text to speech die uitlegt hoe je ergens komt-->
        <div id="locationMap">
            <img src="../images/<?php echo $location['map']; ?>" alt="<?php echo $location['name']; ?>">
            <p tabindex="2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur fuga id laborum nesciunt pariatur veniam veritatis. Deserunt dignissimos, error et fugit labore magni perspiciatis quas reiciendis, sit sunt tempore ullam.</p>
        </div>
    </main>

    <footer>
        <!--        dit is het logo     -->
        <a href="../index.php"><img src="../images/logo.png" alt="Logo"></a>
        <!--        er kunnen hier eventuele social media links/plaatjes        -->
    </footer>
</body>
</html>