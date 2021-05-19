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

            .contact-button {
                background-color: black;
                border: 1px;
                color: white;
                padding: 32px 256px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                font-size: 16px;
                margin: 35px 2px;
                cursor: pointer;
            }

            #map,
            .map {
                width: 100%;
                height: 400px;
            }

            /* CONTACT FORM */
            .flex-container {
                display: flex;
                justify-content: center;
                padding: 50px 200px;
            }

            .form-container {
                /* width: 100%; */
                background-color: black;
                color: white;
                padding: 20px;
                margin-right: 20px;
            }

            input[type="text"],
            textarea {
                width: 100%;
                padding: 12px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type="submit"] {
                background-color: white;
                color: black;
                padding: 12px 20px;
                border: none;
                cursor: pointer;
            }

            .register {
                position: absolute;
                right: 190px;
            }
            .login {
                position: absolute;
                right: 5px;
            }
            .alert {
                text-align: center;
                background-color: black;
                padding: 10px 0px;
                margin: 0px 800px;
                font-size: 20px;
                color: white;
            }
        </style>
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
            </div>
            <div class="header-container">
                <button class="contact-button">Contact us</button>
            </div>

            <div class="flex-container">
                <div class="form-container">
                    <form
                        action="{{ route('contact.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <label for="fullname">Full name</label>
                        <input
                            type="text"
                            id="fullname"
                            name="fullname"
                            placeholder="Your name.."
                        />
                        <label for="email">Email</label>
                        <input
                            type="text"
                            id="email"
                            name="email"
                            placeholder="Your email.."
                        />

                        <label for="subject">Subject</label>
                        <textarea
                            id="subject"
                            name="subject"
                            placeholder="Write something.."
                            style="height: 100px"
                        ></textarea>

                        <input type="submit" value="Submit" />
                    </form>
                </div>
                <!--The div element for the map -->
                <div id="map">
                    <img class="map" src="images/map.png" alt="" />
                </div>
            </div>

            <!-- Success message for every CRUD operation  -->
            @if($message = Session::get('success'))
            <div class="alert">
                <p>Message: {{ $message }}</p>
            </div>
            @endif
        </div>
    </body>
</html>
