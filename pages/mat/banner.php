<div class="khungbn">
    <div class="carousel">
        <button class="prev" onclick="changeImage(-1)">&#10094;</button>
        <div class="image-frame">
            <img id="carouselImage" src="img/z6156997901616_7e85f65820a12bbb763aea29c8cab6b8.jpg" alt="" class="image">
        </div>
        <button class="next" onclick="changeImage(1)">&#10095;</button>
    </div>

    <script>
        let currentImageIndex = 0;
        const images = [
            "img/z6156997901616_7e85f65820a12bbb763aea29c8cab6b8.jpg",  
            "img/z6157003294373_c4233e3231a4a8270ef1a60c1fadaad4.jpg",  
            "img/z6157003511749_ebdf602818700c801e869f6b2bca3be6.jpg"
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
</div>