<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <style>
            body {
                background-image: url("images/bg.jpeg");
            }

            /* HEADER */
            .logo {
                position: absolute;
                top: 0px;
                left: 0px;
            }

            .header-container {
                flex-grow: 1;
                text-align: center;
            }

            .button {
                background-color: black;
                border: 1px;
                color: white;
                padding: 32px 64px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                font-size: 16px;
                margin: 4px 2px;
                cursor: pointer;
            }

            .title {
                text-align: center;
                font-size: 80px;
            }

            /* ICONS */
            .icons-container {
                text-align: center;
                background-image: url("images/icons-bg.jpg");
            }

            .fa {
                padding: 10px;
                font-size: 20px;
                width: 20px;
                text-align: center;
                text-decoration: none;
                margin: 15px 8px;
                border-radius: 50%;
            }

            .fa-facebook {
                background: white;
                color: black;
            }

            .fa-twitter {
                background: white;
                color: black;
            }

            .fa-youtube {
                background: white;
                color: black;
            }

            .fa-instagram {
                background: white;
                color: black;
            }

            /* Lines */
            span {
                position: relative;
                font-size: 20px;
                z-index: 1;
                overflow: hidden;
                /* text-align: center; */
            }
            span:before,
            span:after {
                position: absolute;
                top: 51%;
                overflow: hidden;
                width: 50%;
                height: 3px;
                content: "\a0";
                background-color: white;
            }
            span:before {
                margin-left: -50%;
                /* text-align: right; */
            }

            /* SLIDERSHOW */
            .mySlides {
                display: none;
            }
            img {
                vertical-align: middle;
            }

            .slideshow-container {
                max-width: 1000px;
                position: relative;
                margin: auto;
                margin-top: 30px;
            }

            /* Next & previous buttons */
            .prev,
            .next {
                cursor: pointer;
                position: absolute;
                top: 50%;
                width: auto;
                padding: 16px;
                color: white;
                font-weight: bold;
                font-size: 18px;
                background-color: rgba(0, 0, 0, 0.8);
            }

            /* Position the "next button" to the right */
            .next {
                right: 0;
                border-radius: 3px 0 0 3px;
            }

            .contact-button {
                position: absolute;
                bottom: 5px;
                right: 5px;
            }

            .register {
                position: absolute;
                right: 190px;
            }
            .login {
                position: absolute;
                right: 5px;
            }
        </style>
    </head>

    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />

            <div class="header-container">
                <button class="button">Home</button>
                <button class="button">Menu</button>
                <button class="button">Basket</button>
                <button class="button">Checkout</button>

                <button class="button register">Register</button>
                <button class="button login">Login</button>

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
            <button class="button contact-button">Contact us</button>
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
