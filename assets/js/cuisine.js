document.addEventListener("DOMContentLoaded", function () {

    const pages = ["index.html", "geography.html", "landmarks.html", "cuisine.html", "history.html"];

    const currentPage = window.location.pathname.split("/").pop();

    let currentIndex = pages.indexOf(currentPage);

    const prevButton = document.querySelector(".prev-page");
    const nextButton = document.querySelector(".next-page");

    prevButton.addEventListener("click", function () {
        window.location.href = pages[currentIndex - 1];
    });
    
    nextButton.addEventListener("click", function () {
        window.location.href = pages[currentIndex + 1]
    });
});
