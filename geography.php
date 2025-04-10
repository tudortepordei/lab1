<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <title>Franța - Geography</title>
    <link rel="stylesheet" href="assets/css/geography.css">

</head>

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
    <main>
        <h1>Geografia Franției</h1>
        <div class="container">
            <div class="column">
                <h2>Poziția pe glob</h2>
                <p>
                    Franța este situată în Europa de Vest. Se învecinează cu Belgia,
                    Luxemburg, Germania, Elveția, Italia, Spania și Andorra. Este spălat
                    de Oceanul Atlantic și Marea Mediterană.
                </p>

                <a>
                    <img id="slider1" src="assets/images/pozitia-1.png" alt="Slider Image">
                </a>
            </div>
            <div class="column">
                <h2>Coasta de Azur</h2>
                <p>
                    Coasta de Azur, situată în sud-estul Franței, este o destinație de lux
                    renumită pentru plajele sale spectaculoase, stațiunile elegante precum Nisa,
                    Cannes și Monaco.
                </p>

                <a class="img">
                    <img id="slider2" src="assets/images/azur-1.png" alt="Slider Image">
                </a>
            </div>
            <div class="column">
                <h2>Alpi</h2>
                <p>
                    Munții Alpi sunt cel mai înalt lanț muntos din Europa, întinzându-se
                    prin opt țări și fiind renumiți pentru peisajele spectaculoase, stațiunile
                    de schi și biodiversitatea lor.
                </p>

                <a class="img">
                    <img id="slider3" src="assets/images/alpi-1.png" alt="Slider Image">
                </a>
            </div>
        </div>
        <script src="assets/js/geography.js"></script>
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

<footer>
    <p>© 2025 Franța</p>
</footer>

</html>