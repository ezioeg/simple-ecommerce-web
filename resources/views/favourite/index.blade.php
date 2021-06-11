<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/favourite.css') }}"
        />
    </head>

    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />

            <div class="header-container">
                <a class="button" href="#">Favourites</a>

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

            <!-- products list-->
            <div class="grid-container">
                @if(session('favourite')) @foreach(session('favourite') as $id
                => $product)
                <div class="grid-item">
                    <div class="product-img">
                        <!--added limit size for image(max-width)-->
                        <img
                            class="img"
                            style="max-width: 150px"
                            src="{{  asset('storage').'/'.$product['photo'] }}"
                            alt=""
                        />
                    </div>
                    <div class="product-info">
                        <p class="name-price">
                            {{ $product["name"] }} : £{{ $product["price"] }}
                        </p>

                        <a href="{{ url('add-basket', [$id]) }}">
                            <img
                                class="img"
                                style="max-width: 62px"
                                src="images/basket.png"
                                alt=""
                        /></a>

                        <a
                            href="{{ url('delete-favourite', [$id]) }}"
                            onclick="return confirm('Do you want to remove from the favourite?')"
                        >
                            <img
                                class="img"
                                style="max-width: 50px"
                                src="images/delete.png"
                                alt=""
                        /></a>
                    </div>
                </div>
                @endforeach
            </div>

            @endif

            <a class="button cancel-button" href="{{ route('menu.index') }}"
                >Back to menu</a
            >

            @if(session('favourite'))
            <a
                class="button checkout-button"
                href="{{ route('basket.index') }}"
            >
                Go to basket
            </a>
            @else
            <div class="message">There are no products in the favourite</div>
            <a
                class="button checkout-button"
                href="{{ route('basket.index') }}"
            >
                Go to basket
            </a>

            @endif
        </div>
    </body>
</html>
