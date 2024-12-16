<body>
    <div class="carousel">
        <button class="prev" onclick="changeImage(-1)">&#10094;</button>
        <div class="image-frame">
            <img id="carouselImage" src="img/4.jpg" alt="" class="image">
        </div>
        <button class="next" onclick="changeImage(1)">&#10095;</button>
    </div>

    <script>
        let currentImageIndex = 0;
        const images = [
            "img/5.jpg",  
            "img/3.jpg",  
            "img/1.jpg"
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
