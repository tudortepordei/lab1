<!DOCTYPE html>
<html lang="ro">

<head>
    <meta charset="UTF-8">
    <title>France</title>
    <link rel="stylesheet" href="assets/css/index.css">

</head>

<?php
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: register.php");
  exit();
}
?>

  <title>Bine ai venit</title>

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
        <h1>Bun venit in Franța!</h1>


        <div class="container">
            <div class="column">
                <h2>General</h2>
                <p>
                    Franța este o țară cu o istorie bogată, cultură și bucătărie rafinată. Aici
                    veți găsi informații despre geografia, atracțiile, bucătăria națională și
                    istoria acestei țări uimitoare.
                </p>
                <a class="img" href="https://ro.wikipedia.org/wiki/Franța">
                    <img id="slider3" src="assets/images/franta-1-1.png" alt="Slider Image">
                </a>
            </div>

            <div class="column">
                <h2>Președintele</h2>
                <p>
                    Emmanuel Macron (născut pe 21 decembrie 1977) este un politician
                    francez, fost bancher de investiții, care ocupă funcția de președinte
                    al Franței din 2017. El este la conducerea statului deja de 8 ani.
                </p>
                <a class="img" href="https://ru.wikipedia.org/wiki/Макрон,_Эмманюэль">
                    <img id="slider2" src="assets/images/macron-1.png" alt="Slider Image">
                </a>
            </div>

            <div class="column">
                <h2>Paris</h2>
                <p>
                    Paris este capitala Franței, un oraș renumit pentru istoria
                    sa bogată, arhitectura impresionantă și simboluri iconice precum
                    Turnul Eiffel și Catedrala Notre-Dame.Este cunoscut și ca „Orașul Luminilor”.
                </p>
                <a class="img" href="https://ru.wikipedia.org/wiki/Paris">
                    <img id="slider1" src="assets/images/paris-1.png" alt="Slider Image">
                </a>
            </div>
        </div>
        <script src="assets/js/index.js"></script>
        
</body>
</main>

<footer>
    <p>© 2025 Franța</p>
</footer>

</html>