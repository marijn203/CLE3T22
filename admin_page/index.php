<?php
// Start the session.
session_start();

/** @var mysqli $db */
require_once '../includes/database.php';

$login = false;
// Is user logged in?
if (isset($_SESSION['user_id'])) {
    $login = true;
}

if (isset($_POST['submit'])) {
    /** @var mysqli $db */
    require_once "../includes/database.php";

    // Get form data
    $username = mysqli_escape_string($db, $_POST['username']);
    $password = $_POST['password'];

    // Server-side validation
    $errors = [];
    if ($username == '') {
        $errors['username'] = 'Missing username';
    }
    if ($password == '') {
        $errors['password'] = 'Missing password';
    }

    // If data valid
    if (empty($errors)) {
        // SELECT the user from the database, based on the username.
        $query = "SELECT * FROM admin_users WHERE admin_username='$username'";
        $result = mysqli_query($db, $query);

        // check if the user exists
        if (mysqli_num_rows($result) == 1) {
            // Get user data from result
            $user = mysqli_fetch_assoc($result);

            // Check if the provided password matches the stored password in the database
            if (password_verify($password, $user['admin_password'])) {
                $login = true;

                // Store the user in the session
                $_SESSION['user_id'] = [
                    'id' => $user['id'],
                    'admin_username' => $user['admin_username'],
                ];

                // Redirect to secure page
            } else {
                //error incorrect log in
                $errors['loginFailed'] = 'Wrong credentials.';
            }
        } else {
            //error incorrect log in
            $errors['loginFailed'] = 'Wrong credentials.';
        }

    }
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
    <title>Audioscape</title>
</head>
<body>
<nav>
    <!--        dit is het logo     -->
    <img src="../images/logo.png" alt="Logo">
</nav>

<main>
</main>

<footer>
    <!--        dit is het logo     -->
    <img src="../images/logo.png" alt="Logo">
    <!--        er kunnen hier eventuele social media links/plaatjes        -->
</footer>
</body>
</html>
