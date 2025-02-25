document.addEventListener("DOMContentLoaded", function () {
    // Definim ordinea paginilor
    const pages = ["index.html", "geography.html", "landmarks.html", "cuisine.html", "history.html"];

    // Obținem numele paginii curente
    const currentPage = window.location.pathname.split("/").pop();

    // Găsim indexul paginii curente în listă
    let currentIndex = pages.indexOf(currentPage);

    // Butoane
    const prevButton = document.querySelector(".prev-page");
    const nextButton = document.querySelector(".next-page");

    // Navigare la pagina anterioară
    prevButton.addEventListener("click", function () {
        if (currentIndex > 0) {
            window.location.href = pages[currentIndex - 1];
        } else {
            alert("Aceasta este prima pagină!");
        }
    });

    // Navigare la pagina următoare
    nextButton.addEventListener("click", function () {
        if (currentIndex < pages.length - 1) {
            window.location.href = pages[currentIndex + 1];
        } else {
            alert("Aceasta este ultima pagină!");
        }
    });
});
