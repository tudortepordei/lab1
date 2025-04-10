<?php
include "db.php";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $users = $_POST['username'];
    $pass = $_POST['password'];

    if (isset($_POST['register'])) {
        $passConfirm = $_POST['confirm_password'];
        
        if ($pass !== $passConfirm) {
            $message = "Parolele nu se potrivesc!";
        } else {
            $passHash = password_hash($pass, PASSWORD_DEFAULT);
            $check = "SELECT * FROM users WHERE username='$users'";
            $result = $conn->query($check);

            if ($result->num_rows > 0) {
                $message = "Utilizatorul există deja!";
            } else {
                $insert = "INSERT INTO users (username, password) VALUES ('$users', '$passHash')";
                $message = ($conn->query($insert)) ? "Cont creat cu succes! <a href='login.php'>Autentifică-te aici</a>" : "Eroare la înregistrare!";
            }
        }
    } elseif (isset($_POST['login'])) {
        // Logare
        $check = "SELECT * FROM users WHERE username='$users'";
        $result = $conn->query($check);

        if ($result->num_rows == 0) {
            $message = "Utilizatorul nu există!";
        } else {
            $row = $result->fetch_assoc();
            $message = (password_verify($pass, $row['password'])) ? "Te-ai autentificat cu succes!" : "Parola incorectă!";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Înregistrare</title>
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
    <h2>Înregistrare</h2>

    <?php if ($message): ?>
      <div class="message <?php echo (strpos($message, 'succes') !== false) ? 'success' : ''; ?>">
        <?php echo $message; ?>
      </div>
    <?php endif; ?>

    <form method="POST">
      <input type="text" name="username" placeholder="Nume utilizator" required>
      <input type="password" name="password" placeholder="Parolă" required>
      
      <?php if (!isset($_POST['login'])): ?>
        <input type="password" name="confirm_password" placeholder="Confirmă parola" required>
      <?php endif; ?>

      <button type="submit" name="<?php echo isset($_POST['login']) ? 'login' : 'register'; ?>">
        <?php echo isset($_POST['login']) ? 'Logare' : 'Înregistrare'; ?>
      </button>
    </form>

    <div class="form-toggle">
      <?php if (isset($_POST['login'])): ?>
        <p>Nu ai cont? <a href="register.php">Înregistrează-te aici</a></p>
      <?php else: ?>
        <p>Ai deja cont? <a href="login.php">Autentifică-te aici</a></p>
      <?php endif; ?>
    </div>
  </div>
</body>
</html>
