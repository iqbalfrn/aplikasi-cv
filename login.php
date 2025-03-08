<?php
session_start();

if(isset($_SESSION['email'])) {
    header("Location: form.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login - Aplikasi CV</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form action="proses_login.php" method="post">
      <label for="email">Email:</label>
      <input type="email" name="email" required>
      
      <label for="password">Password:</label>
      <input type="password" name="password" required>
      
      <input type="submit" value="Login">
    </form>
  </div>
</body>
</html>
