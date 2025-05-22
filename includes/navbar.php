<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar Page</title>

    <!-- Link to external CSS -->
    <link rel="stylesheet" href="assets/css/navbar.css">
</head>

<body>

    <!-- Your navbar code here -->
    <nav class="navbar">
        <div class="navbar-container">
            <div class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
                </svg>
            </div>

            <div class="nav-links">
                <ul>
                    <li class="active"><a href="login.php">Account</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Explore</a></li>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div>

            <div class="login-button">
            <a href="<?php echo (basename($_SERVER['PHP_SELF']) == 'login.php') ? 'signup.php' : 'login.php'; ?>">
                <button>
                    <svg xmlns="http://www.w3.org/2000/svg" class="login-icon" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M3 3a1 1 0 011 1v12a1 1 0 11-2 0V4a1 1 0 011-1zm7.707 3.293a1 1 0 010 1.414L9.414 9H17a1 1 0 110 2H9.414l1.293 1.293a1 1 0 01-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0z" clip-rule="evenodd" />
                    </svg>
                    <span><?php
                            if (basename($_SERVER['PHP_SELF']) == 'login.php') {
                                echo 'Create Account';
                            } elseif (basename($_SERVER['PHP_SELF']) == 'signup.php') {
                                echo 'Login';
                            }
                            ?></span>
                </button>
            </a>
            </div>
        </div>
    </nav>

</body>

</html>