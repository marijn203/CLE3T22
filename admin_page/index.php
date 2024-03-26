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