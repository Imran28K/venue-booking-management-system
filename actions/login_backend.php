<?php
include __DIR__ . '/../includes/db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Find user
    $stmt = $conn->prepare("SELECT * FROM users WHERE Username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Verify the hashed password
        if (password_verify($password, $row['PasswordHash'])) {
            $userType = $row['UserType'];
            if ($userType == "Manager") {
                $_SESSION['username'] = $username;
                header('Location: manager/dashboard.php');
                exit();
            } else if ($userType = $row['UserType']) {
                $_SESSION['username'] = $username;
                header('Location: booker/dashboard.php');
                exit();
            }
            
        } else {
            $error = "Wrong username or password.";
        }
    } else {
        $error = "Wrong username or password.";
    }
}
?>