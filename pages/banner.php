        
<body>
<div class="carousel">
    <button class="prev" onclick="changeImage(-1)">&#10094;</button>
    <div class="image-frame">
        <img src="img/taixuong.jpg" alt="" srcset=""class="image">
    </div>
    <button class="next" onclick="changeImage(1)">&#10095;</button>
</div>

<script>
    let currentImageIndex = 0;
        const images = [
        "img/taixuong.jpg",  
        "img/taixuong1.png",  
        "img/taixuong.jpg"
    ];

    function changeImage(direction) {
        currentImageIndex += direction;

        if (currentImageIndex < 0) {
            currentImageIndex = images.length - 1;
        } else if (currentImageIndex >= images.length) {
            currentImageIndex = 0;
        }

        document.getElementById("carouselImage").src = images[currentImageIndex];
    }
</script>
</body>

