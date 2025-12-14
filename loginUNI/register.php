<?php
include 'insert.php';
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="sty.css">

</head>

<body>

<div class="auth-wrapper">
<?php if(!empty($message)) echo $message; ?>

<form class="auth-card" method="post" autocomplete="off">
    <h2  class="text-center mb-4">Create Account</h2>

    <div class="row g-3">

        <div class="col-md-6">
            
            <input type="text" class="form-control custom-input" name="firstname" required placeholder="Enter First Name">
        </div>
<br>
        <div class="col-md-6">
            
            <input type="text" class="form-control custom-input" name="lastname" required placeholder="Enter Last Name">
        </div>
<br>
        <div class="col-12">
            
            <input type="email" class="form-control custom-input" name="email" required placeholder="Enter Email">
        </div>
        <br>

        <div class="col-12">
            
            <input type="password" class="form-control custom-input" name="password" required placeholder="Enter password">
        </div>
    </div>

    <!-- زرار التسجيل -->
    <button class="btn register-btn w-100 mt-4" type="submit" name="register">Register</button>

    <!-- أيقونات السوشيال -->
    <div class="social-icons">
        <i class="fab fa-google google-icon"></i>
        <i class="fab fa-facebook facebook-icon"></i>
    </div>

    <p class="text-center mt-3">Already have an account? <a href="login.php">Login</a></p>

</form>

</div>

</body>
</html>







