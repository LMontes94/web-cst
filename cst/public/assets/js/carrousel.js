
document.addEventListener("DOMContentLoaded", function () {
    const section = document.getElementById("home");

    const images = [
        "/assets/img/Colegio4.jpg",
        "/assets/img/4.jpg",
        "/assets/img/Secundaria4.jpg",
        "/assets/img/Jardin1.jpg",
        "/assets/img/Primaria2.jpg"
    ];

    let current = 0;

    setInterval(() => {
        current = (current + 1) % images.length;
        section.style.backgroundImage = `url('${images[current]}')`;
    }, 3000); // cambia cada 3 segundos
});
