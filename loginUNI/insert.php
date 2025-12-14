<?php 

$message = ""; // رسالة هتبان فوق الفورم

if(isset($_POST['register'])){

    $firstname = $_POST['firstname'];
    $lastname  = $_POST['lastname'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];

    $conn = mysqli_connect("localhost", "root", "root", "tourismdb");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // check if email exists
    $check = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $check);

    if (mysqli_num_rows($result) > 0) {
        $message = "<div class='message error'>This email is already registered!</div>";
    } 
    else {
        $query = "INSERT INTO users (firstname, lastname, email, password)
                  VALUES ('$firstname', '$lastname', '$email', '$password')";

        if (mysqli_query($conn, $query)) {
            $message = "<div class='message success'>Account created successfully!</div>";
        }
    }
}
?>

