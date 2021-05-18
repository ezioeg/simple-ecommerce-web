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

            #map {
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
            <div class="header-container">
                <button class="contact-button">Contact us</button>
            </div>

            <div class="flex-container">
                <div class="form-container">
                    <form action="#">
                        <label for="fname">Full name</label>
                        <input
                            type="text"
                            id="fname"
                            name="firstname"
                            placeholder="Your name.."
                        />
                        <label for="lname">Email</label>
                        <input
                            type="text"
                            id="email"
                            name="e-mail"
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
                <div id="map"></div>
            </div>

            <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDJZoOAsy1bUsjVd39LE6UHSMEtTtKr0rI&callback=initMap&libraries=&v=weekly"
                async
            ></script>
        </div>

        <script>
            // Initialize and add the map
            function initMap() {
                // The location of Uluru
                const uluru = { lat: -25.344, lng: 131.036 };
                // The map, centered at Uluru
                const map = new google.maps.Map(
                    document.getElementById("map"),
                    {
                        zoom: 12,
                        center: uluru,
                    }
                );
                // The marker, positioned at Uluru
                const marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                });
            }
        </script>
    </body>
</html>
