<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <title>Franța - Landmarks</title>
    <link rel="stylesheet" href="assets/css/landmarks.css">

</head>
<main>

    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="register.php">Înregistrare</a></li>
                    <li><a href="index.php">Principal</a></li>
                    <li><a href="geography.php">Geografia</a></li>
                    <li><a href="landmarks.php">Atracții</a></li>
                    <li><a href="cuisine.php">Bucătăria</a></li>
                    <li><a href="history.php">Istoria</a></li>
                    <li><a href="logout.php">Logout</a></li>
                    <form method="POST" onsubmit="return confirm('Sigur vrei să ștergi contul? Această acțiune este ireversibilă!');">
  <button type="submit" name="delete_account" style="background:red; color:white; padding:10px; border:none; border-radius:6px;">Șterge contul</button>
</form>
                </ul>
            </nav>
        </header>
        <div class="prev">
            <button class="prev-page">&#9665;</button>
        </div>
        <div class="next">
            <button class="next-page">&#9655;</button>
        </div>
        <h1>Locuri populare</h1>
        <div class="container">
            <div class="column">
                <p>
                <h2>Louvre</h2>
                Luvru (Louvre) este unul dintre cele mai faimoase muzee din lume, situat
                în Paris, Franța. A fost inițial o fortăreață medievală, apoi un palat regal,
                și a devenit muzeu în 1793.
                </p>
                <a>
                    <img id="slider1" src="assets/images/louvre-1.png" alt="Slider Image">
                </a>
            </div>

            <div class="column">
                <p>
                <h2>Turnul Eifel</h2>
                Un simbol al Parisului, construit în 1889. Turnul Eiffel este un simbol
                iconic al Franței și una dintre cele mai vizitate atracții turistice din lume.
                Este realizat din fier pudlat și are o înălțime de 330 de metri.
                </p>
                <a>
                    <img id="slider2" src="assets/images/eiffel-1.png" alt="Slider Image">
                </a>
            </div>

            <div class="column">
                <p>
                <h2>Moulin Rouge</h2>
                Moulin Rouge este un cabaret celebru din Paris, fondat în 1889, renumit
                pentru spectacolele sale de cancan francez, atmosfera boemă și contribuția
                sa la cultura artistică și de divertisment a Franței.
                </p>
                <a>
                    <img id="slider3" src="assets/images/rouge-1.png" alt="Slider Image">
                </a>
            </div>
        </div>
        <script src="assets/js/landmarks.js"></script>
        <?php
if (isset($_POST['delete_account'])) {
    session_start();
    include "db.php";

    $users = $_SESSION['username'];

    // Ștergem contul
    $delete = "DELETE FROM users WHERE username='$users'";
    $conn->query($delete);

    // Distrugem sesiunea
    session_unset();
    session_destroy();

    // Redirectăm la înregistrare sau login
    header("Location: register.php");
    exit();
}
?>
    </body>
</main>
<footer>
    <p>© 2025 Franța</p>
</footer>

</html>