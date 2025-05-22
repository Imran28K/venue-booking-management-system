<?php
include '../actions/signup_backend.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Signup</title>
    <link rel="stylesheet" href="../assets/css/login.css"> <!-- Same CSS as login -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
</head>
<body>

<?php
include '../includes/navbar.php'; // Navbar same like login
?>

<div class="container">
    <div class="screen">
        <div class="screen__content">
            <form class="login" method="POST" action="signup.php">
                <div class="login__field">
                    <i class="login__icon fas fa-user"></i>
                    <input type="text" name="username" class="login__input" placeholder="Username" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-envelope"></i>
                    <input type="email" name="email" class="login__input" placeholder="Email" required>
                </div>
                <div class="login__field">
                    <i class="login__icon fas fa-lock"></i>
                    <input type="password" name="password" class="login__input" placeholder="Password" required>
                </div>
                <button class="button login__submit" type="submit">
                    <span class="button__text">Sign Up Now</span>
                    <i class="button__icon fas fa-chevron-right"></i>
                </button>
            </form>

            <?php
            if (isset($error)) {
                echo "<p style='color:red; margin-top:10px; text-align:center;'>$error</p>";
            }
            if (isset($success)) {
                echo "<p style='color:green; margin-top:10px; text-align:center;'>$success</p>";
            }
            ?>

            <div class="social-login">
                <h3>Sign up via</h3>
                <div class="social-icons">
                    <a href="#" class="social-login__icon fab fa-instagram"></a>
                    <a href="#" class="social-login__icon fab fa-facebook"></a>
                    <a href="#" class="social-login__icon fab fa-twitter"></a>
                </div>
            </div>
        </div>
        
        <div class="screen__background">
            <span class="screen__background__shape screen__background__shape4"></span>
            <span class="screen__background__shape screen__background__shape3"></span>		
            <span class="screen__background__shape screen__background__shape2"></span>
            <span class="screen__background__shape screen__background__shape1"></span>
        </div>		
    </div>
</div>

</body>
</html>
