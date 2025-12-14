<?php
$message = "";

if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // --------------------------
    // 1) Check Admin First
    // --------------------------
    if ($email === "emman@gmail.com") {

        // admin → no need to check database
        header("Location: dashboard.php");
        exit();
    }

    // --------------------------
    // 2) Normal User Login
    // --------------------------
    $conn = mysqli_connect("localhost", "root", "root", "tourismdb");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // check if email exists
    $query_email = "SELECT * FROM users WHERE email='$email'";
    $result_email = mysqli_query($conn, $query_email);

    if (mysqli_num_rows($result_email) == 0) {

        $message = "<div class='message error'>This email does not exist!</div>";

    } else {

        // email exists → check password
        $user = mysqli_fetch_assoc($result_email);

        if ($password !== $user['password']) {

            $message = "<div class='message error'>Wrong password!</div>";

        } else {

            // login success → redirect to homepage
            header("Location: home.php"); 
            exit();
        }
    }
}
?>
