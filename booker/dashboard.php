<?php
include '../includes/db.php';
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: ../login.php');
    exit();
}
$username = $_SESSION['username'];
$sql = "SELECT UserType FROM users WHERE Username = '$username'";
$result = $conn->query($sql);


$userType = '';
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $userType = $row['UserType'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
</head>
<body>

<h1>Welcome, <?php echo htmlspecialchars($_SESSION['username']); ?>! Role: <?php echo $userType; ?></h1>

<p><a href="../logout.php">Logout</a></p>

</body>
</html>