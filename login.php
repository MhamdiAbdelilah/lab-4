<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Hard-coded credentials
  $valid_users = [
    'wiener' => 'peter',
    'admin' => 'adminpassword' // New admin user
  ];

  if (array_key_exists($username, $valid_users) && $valid_users[$username] === $password) {
    // Set session for admin if the username is 'admin'
    if ($username === 'admin') {
      $_SESSION['Admin'] = true;
    } else {
      $_SESSION['Admin'] = false;
    }
    header("Location: /admin.php");
    exit();
  } else {
    echo "Invalid credentials!";
  }
}
?>
