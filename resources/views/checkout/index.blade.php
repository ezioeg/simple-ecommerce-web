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
                margin-bottom: 43px;
                cursor: pointer;
            }

            /* CHECKOUT FORM */
            * {
                box-sizing: border-box;
            }

            .row {
                display: flex;
                flex-wrap: wrap;
                margin: 0 -16px;
            }

            .col-25 {
                flex: 25%;
            }

            .col-50 {
                flex: 50%;
            }

            .col-75 {
                flex: 75%;
            }

            .col-25,
            .col-50,
            .col-75 {
                padding: 0 16px;
            }

            .flex-container {
                display: flex;
                justify-content: center;
                padding: 50px 200px;
            }

            .checkout-container {
                background-color: black;
                padding: 20px;
            }

            input[type="text"] {
                width: 100%;
                margin-bottom: 20px;
                padding: 12px;
            }

            label {
                margin-bottom: 10px;
                display: block;
                color: white;
            }

            .icon-container {
                margin-bottom: 20px;
                padding: 7px 0;
                font-size: 24px;
            }

            .btn {
                background-color: white;
                color: black;
                padding: 12px;
                margin: 10px 0;
                border: none;
                width: 100%;
                cursor: pointer;
                font-size: 17px;
            }

            hr {
                border: 1px solid white;
            }

            span.price {
                float: right;
                color: white;
            }

            .col-25 {
                margin-bottom: 20px;
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
                <button class="button">Checkout</button>

                <button class="button register">Register</button>
                <button class="button login">Login</button>
            </div>
            <div class="flex-container">
                <div class="row">
                    <div class="col-25">
                        <div class="checkout-container">
                            <h4 style="color: white">
                                Basket
                                <span class="price" style="color: white"
                                    ><i class="fa fa-shopping-basket"></i>
                                    <b>4</b></span
                                >
                            </h4>
                            <p style="color: white">
                                Product 1
                                <span class="price">£15</span>
                            </p>
                            <p style="color: white">
                                Product 2
                                <span class="price">£5</span>
                            </p>
                            <p style="color: white">
                                Product 3
                                <span class="price">£8</span>
                            </p>
                            <p style="color: white">
                                Product 4
                                <span class="price">£2</span>
                            </p>
                            <hr />
                            <p style="color: white">
                                Total
                                <span class="price"><b>£30</b></span>
                            </p>
                        </div>
                    </div>
                    <div class="col-75">
                        <div class="checkout-container">
                            <form action="#">
                                <div class="row">
                                    <div class="col-50">
                                        <h3 style="color: white">
                                            Billing Address
                                        </h3>
                                        <label for="fname">Full Name</label>
                                        <input
                                            type="text"
                                            id="fname"
                                            name="firstname"
                                            placeholder="John M. Doe"
                                        />
                                        <label for="email"> Email</label>
                                        <input
                                            type="text"
                                            id="email"
                                            name="email"
                                            placeholder="john@example.com"
                                        />
                                        <label for="adr"> Address</label>
                                        <input
                                            type="text"
                                            id="adr"
                                            name="address"
                                            placeholder="Abbey Road"
                                        />
                                        <label for="city"> City</label>
                                        <input
                                            type="text"
                                            id="city"
                                            name="city"
                                            placeholder="London"
                                        />

                                        <div class="row">
                                            <div class="col-50">
                                                <label for="state">State</label>
                                                <input
                                                    type="text"
                                                    id="state"
                                                    name="state"
                                                    placeholder="LDN"
                                                />
                                            </div>
                                            <div class="col-50">
                                                <label for="zip">Zip</label>
                                                <input
                                                    type="text"
                                                    id="zip"
                                                    name="zip"
                                                    placeholder="NW8 0AE"
                                                />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-50">
                                        <h3 style="color: white">Payment</h3>
                                        <label for="fname"
                                            >Accepted Cards</label
                                        >
                                        <div class="icon-container">
                                            <i
                                                class="fa fa-cc-visa"
                                                style="color: navy"
                                            ></i>
                                            <i
                                                class="fa fa-cc-amex"
                                                style="color: blue"
                                            ></i>
                                            <i
                                                class="fa fa-cc-mastercard"
                                                style="color: red"
                                            ></i>
                                            <i
                                                class="fa fa-cc-discover"
                                                style="color: orange"
                                            ></i>
                                        </div>
                                        <label for="cname">Name on Card</label>
                                        <input
                                            type="text"
                                            id="cname"
                                            name="cardname"
                                            placeholder="John More Doe"
                                        />
                                        <label for="ccnum"
                                            >Credit card number</label
                                        >
                                        <input
                                            type="text"
                                            id="ccnum"
                                            name="cardnumber"
                                            placeholder="1111-2222-3333-4444"
                                        />
                                        <label for="expmonth">Exp Month</label>
                                        <input
                                            type="text"
                                            id="expmonth"
                                            name="expmonth"
                                            placeholder="September"
                                        />
                                        <div class="row">
                                            <div class="col-50">
                                                <label for="expyear"
                                                    >Exp Year</label
                                                >
                                                <input
                                                    type="text"
                                                    id="expyear"
                                                    name="expyear"
                                                    placeholder="2018"
                                                />
                                            </div>
                                            <div class="col-50">
                                                <label for="cvv">CVV</label>
                                                <input
                                                    type="text"
                                                    id="cvv"
                                                    name="cvv"
                                                    placeholder="352"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <input
                                    type="submit"
                                    value="Continue to checkout"
                                    class="btn"
                                />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
