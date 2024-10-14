<?php
if ($_COOKIE['Admin'] !== 'true') {
  echo "Access Denied.";
  exit;
}

echo "<h1>Admin Panel</h1>";
echo "<p>Welcome, Admin!</p>";
echo "<form method='POST' action='delete_user.php'>
        <input type='submit' value='Delete user carlos'>
      </form>";
?>
