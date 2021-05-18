<!DOCTYPE html>
<html>
    <head>
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

            /* ITEMS */
            .grid-container {
                display: grid;
                grid-template-columns: auto auto auto;
                padding: 35px 400px;
                grid-gap: 20px;
            }

            .grid-item {
                /* border: 1px solid black; */
                max-width: 300px;
                margin: auto;
                text-align: center;
                padding-bottom: 15px;
            }

            .name-price {
                background-color: black;
                color: white;
                padding: 10px 0px;
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
            </div>

            <!-- products list-->
            <div class="grid-container">
                <div class="grid-item">
                    <!--added limit size for image(max-width)-->
                    <img
                        class="img"
                        style="max-width: 250px"
                        src="images/product1.jpg"
                        alt=""
                    />
                    <p class="name-price">Loaded Chips: £5.99</p>

                    <a href="">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/basket.png"
                            alt=""
                    /></a>
                </div>
                <div class="grid-item">
                    <!--added limit size for image(max-width)-->
                    <img
                        class="img"
                        style="max-width: 250px"
                        src="images/product1.jpg"
                        alt=""
                    />
                    <p class="name-price">Loaded Chips: £5.99</p>

                    <a href="">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/basket.png"
                            alt=""
                    /></a>
                </div>
                <div class="grid-item">
                    <!--added limit size for image(max-width)-->
                    <img
                        class="img"
                        style="max-width: 250px"
                        src="images/product1.jpg"
                        alt=""
                    />
                    <p class="name-price">Loaded Chips: £5.99</p>

                    <a href="">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/basket.png"
                            alt=""
                    /></a>
                </div>
                <div class="grid-item">
                    <!--added limit size for image(max-width)-->
                    <img
                        class="img"
                        style="max-width: 250px"
                        src="images/product1.jpg"
                        alt=""
                    />
                    <p class="name-price">Loaded Chips: £5.99</p>

                    <a href="">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/basket.png"
                            alt=""
                    /></a>
                </div>
            </div>
        </div>
    </body>
</html>
