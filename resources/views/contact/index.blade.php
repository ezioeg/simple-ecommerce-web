<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/contact.css') }}"
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

                @if (Route::has('login')) @auth
                <a class="button register">Hello, {{Auth::user()->name}}</a>
                <a class="button login" href="{{ url('/logout') }}"> logout </a>
                @else
                <a class="button login" href="{{ route('login') }}">Login</a>
                <!--register button-->
                @if (Route::has('register'))
                <a class="button register" href="{{ route('register') }}"
                    >Register</a
                >
                @endif @endauth @endif
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
            <div class="success-message">
                <p>Message: {{ $message }}</p>
            </div>
            @endif
        </div>
    </body>
</html>
