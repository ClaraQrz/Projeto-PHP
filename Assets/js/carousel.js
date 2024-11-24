let currentIndex = 0;
const images = document.querySelectorAll('.carousel-image');
const totalImages = images.length;

function showSlide(index) {
    const carousel = document.querySelector('.carousel');
    const newTransform = -index * 100;
    carousel.style.transform = `translateX(${newTransform}%)`;
}

function nextSlide() {
    currentIndex = (currentIndex + 1) % totalImages;
    showSlide(currentIndex);
}

function previousSlide() {
    currentIndex = (currentIndex - 1 + totalImages) % totalImages;
    showSlide(currentIndex);
}

// Alterna automaticamente a cada 3 segundos
setInterval(nextSlide, 3000);


/* .info{
    display: flex;
    justify-content: space-around;
    text-align: center;
    padding: 18px;
    padding-left: 60px;
    padding-right: 60px;
}

/* .carousel-container {
    position: relative;
    margin: 0;
    overflow: hidden;
    border-radius: 15px;
    align-items: right;
}

.carousel {
    display: flex;
    align-items: right;
    width: 400px;
    height: 240px;
}

.carousel-image {
    min-width: 100%;
}

.carousel-btn {
    position: absolute;
    top: 40%;
    background-color: rgba(0, 0, 0, 0.5);
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
} */

/* .prev {
    left: 0;
}

.next {
    right: 0;
} */


// <!-- <div class="info">
                    
//     <div class="carousel-container">
//         <div class="carousel">
//             <img src="./images/Produtos-MV/carousel/C1.png" class="carousel-image" alt="Imagem 1">
//             <img src="./images/Produtos-MV/carousel/C2.png" class="carousel-image" alt="Imagem 2">
//             <img src="./images/Produtos-MV/carousel/C3.png" class="carousel-image" alt="Imagem 3">
//             <img src="./images/Produtos-MV/carousel/C4.png" class="carousel-image" alt="Imagem 4">
//         </div>
//         <button class="carousel-btn prev" onclick="previousSlide()">&#10094;</button>
//         <button class="carousel-btn next" onclick="nextSlide()">&#10095;</button>
//     </div>
//     <script src="./Assets/js/script.js"></script>
// </div> -->