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


const images1 = [
    "assets/images/pozitia-1.png",
    "assets/images/pozitia-2.png",
    "assets/images/pozitia-3.png"
];

const images2 = [
    "assets/images/azur-1.png",
    "assets/images/azur-2.png",
    "assets/images/azur-3.png"
];

const images3 = [
    "assets/images/alpi-1.png",
    "assets/images/alpi-2.png",
    "assets/images/alpi-3.png"
];

let currentIndex1 = 0;
let currentIndex2 = 0;
let currentIndex3 = 0;

function changeImage1() {
    const imgElement = document.getElementById("slider1");
    if (imgElement) {
        imgElement.src = images1[currentIndex1];
        currentIndex1 = (currentIndex1 + 1) % images1.length;
    }
}

function changeImage2() {
    const imgElement = document.getElementById("slider2");
    if (imgElement) {
        imgElement.src = images2[currentIndex2];
        currentIndex2 = (currentIndex2 + 1) % images2.length;
    }
}

function changeImage3() {
    const imgElement = document.getElementById("slider3");
    if (imgElement) {
        imgElement.src = images3[currentIndex3];
        currentIndex3 = (currentIndex3 + 1) % images3.length;
    }
}

setInterval(changeImage1, 3000);
setInterval(changeImage2, 3000);
setInterval(changeImage3, 3000);
