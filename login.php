<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Hard-coded credentials
  $valid_username = 'wiener';
  $valid_password = 'peter';

  if ($username === $valid_username && $password === $valid_password) {
    // Set admin cookie to false
    setcookie('Admin', 'false', time() + (86400 * 30), "/");
    // Redirect to admin page
    header("Location: admin.php");
    exit();
  } else {
    echo "Invalid credentials!";
  }
}
?>
²