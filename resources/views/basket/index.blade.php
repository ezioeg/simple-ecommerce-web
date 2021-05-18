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
                grid-template-columns: auto auto auto auto;
                padding: 20px 400px;
                grid-gap: 20px;
            }

            .grid-item {
                /* border: 1px solid black; */
                display: flex;
                align-items: stretch;
                /* max-width: 320px; */
                margin: auto;
                padding-bottom: 15px;
            }

            .name-price {
                background-color: black;
                color: white;
                padding: 10px 5px;
            }

            .cancel-button {
                position: absolute;
                background-color: white;
                color: black;
                bottom: 5px;
                left: 5px;
            }

            .checkout-button {
                position: absolute;
                bottom: 5px;
                right: 5px;
            }

            .product-img {
                padding-top: 16px;
            }

            .product-info {
                padding-left: 10px;
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
                <button class="button">Basket</button>

                <button class="button register">Register</button>
                <button class="button login">Login</button>
            </div>

            <!-- products list-->
            <div class="grid-container">
                <div class="grid-item">
                    <div class="product-img">
                        <!--added limit size for image(max-width)-->
                        <img
                            class="img"
                            style="max-width: 150px"
                            src="images/product1.jpg"
                            alt=""
                        />
                    </div>
                    <div class="product-info">
                        <p class="name-price">Loaded Chips: £5.99</p>

                        <a href="">
                            <img
                                class="img"
                                style="max-width: 50px"
                                src="images/delete.png"
                                alt=""
                        /></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="product-img">
                        <!--added limit size for image(max-width)-->
                        <img
                            class="img"
                            style="max-width: 150px"
                            src="images/product1.jpg"
                            alt=""
                        />
                    </div>
                    <div class="product-info">
                        <p class="name-price">Loaded Chips: £5.99</p>

                        <a href="">
                            <img
                                class="img"
                                style="max-width: 50px"
                                src="images/delete.png"
                                alt=""
                        /></a>
                    </div>
                </div>
                <div class="grid-item">
                    <div class="product-img">
                        <!--added limit size for image(max-width)-->
                        <img
                            class="img"
                            style="max-width: 150px"
                            src="images/product1.jpg"
                            alt=""
                        />
                    </div>
                    <div class="product-info">
                        <p class="name-price">Loaded Chips: £5.99</p>

                        <a href="">
                            <img
                                class="img"
                                style="max-width: 50px"
                                src="images/delete.png"
                                alt=""
                        /></a>
                    </div>
                </div>
            </div>

            <p class="header-container">
                <b class="button">TOTAL: £15</b>
            </p>

            <button class="button cancel-button">Cancel order</button>
            <button class="button checkout-button">Proceed to checkout</button>
        </div>
    </body>
</html>
