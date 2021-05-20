<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/home.css') }}"
        />
    </head>

    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />

            <div class="header-container">
                <a class="button" href="{{ url('/') }}">Home</a>
                <a class="button" href="{{ route('menu.index') }}">Menu</a>
                <a class="button" href="{{ route('basket.index') }}">Basket</a>
                <a class="button" href="{{ route('checkout.index') }}"
                    >Checkout</a
                >

                <a class="button register" href="#">Register</a>
                <a class="button login" href="#">Login</a>

                <h1 class="title">British Chip Kitchen</h1>
            </div>

            <div class="icons-container">
                <span>
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </span>
            </div>

            <div class="slideshow-container">
                <div class="mySlides">
                    <img src="images/27.svg" width="1000" height="500" />
                </div>

                <div class="mySlides">
                    <img src="images/32.svg" width="1000" height="500" />
                </div>

                <div class="mySlides">
                    <img src="images/43.svg" width="1000" height="500" />
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
            </div>

            <a class="button contact-button" href="{{ route('contact.index') }}"
                >Contact us</a
            >
        </div>
        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides((slideIndex += n));
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");

                if (n > slides.length) {
                    slideIndex = 1;
                }
                if (n < 1) {
                    slideIndex = slides.length;
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                slides[slideIndex - 1].style.display = "block";
            }
        </script>
    </body>
</html>
