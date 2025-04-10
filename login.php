<?php
session_start();
include "db.php";

$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $sql = "SELECT * FROM users WHERE username='$username'";
  $result = $conn->query($sql);

  if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    
    if (password_verify($password, $row['password'])) {
      $_SESSION['username'] = $username;
      header("Location: index.php");
      exit();
    } else {
      $message = "Parolă incorectă!";
    }
  } else {
    $message = "Utilizatorul nu există!";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Autentificare</title>
  <style>
    body { font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; }
    .container { background: white; padding: 30px 40px; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); width: 350px; }
    h2 { text-align: center; margin-bottom: 20px; }
    input[type="text"], input[type="password"] { width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 6px; }
    button { width: 100%; padding: 10px; background-color: #2c89e8; color: white; border: none; border-radius: 6px; font-weight: bold; cursor: pointer; }
    button:hover { background-color: #1869c7; }
    .message { text-align: center; color: red; margin-bottom: 10px; }
    .success { color: green; }
    .form-toggle { text-align: center; margin-top: 20px; }
    .form-toggle a { text-decoration: none; color: #2c89e8; }
    .form-toggle a:hover { color: #1869c7; }
  </style>
</head>
<body>
  <div class="container">
    <h2>Autentificare</h2>

    <?php if ($message): ?>
      <div class="message"><?php echo $message; ?></div>
    <?php endif; ?>

    <form method="POST">
      <input type="text" name="username" placeholder="Nume utilizator" required>
      <input type="password" name="password" placeholder="Parolă" required>
      <button type="submit">Logare</button>
    </form>

    <div class="form-toggle">
      <p>Nu ai cont? <a href="register.php">Înregistrează-te aici</a></p>
    </div>
  </div>
</body>
</html>
