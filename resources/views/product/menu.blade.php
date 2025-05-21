<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/menu.css') }}"
        />
    </head>
    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />

            <div class="header-container">
                <a class="button" href="{{ url('/') }}">Home</a>
                <a class="button" href="{{ route('menu.index') }}">Menu</a>
                <a class="button" href="{{ route('favourite.index') }}"
                    >Favourites</a
                >
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

            <!-- products list-->
            <div class="grid-container">
                @if(count($menu)>0) @foreach($menu as $pro)

                <div class="grid-item">
                    <!--added limit size for image(max-width)-->
                    @php $photo=explode(',',$pro->photo); @endphp
                    <img
                        class="img"
                        style="max-width: 200px"
                        src="{{ asset('storage').'/'.$pro->photo }}"
                        alt="{{ asset('storage').'/'.$pro->photo }}"
                    />
                    <p class="name-price">
                        {{ $pro->name }}: £{{ $pro->price }}
                    </p>

                    <a href="{{ url('add-basket/'.$pro->id) }}">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/basket.png"
                            alt=""
                    /></a>
                    <a href="{{ url('add-favourite/'.$pro->id) }}">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/favourite.png"
                            alt=""
                    /></a>
                </div>
                @endforeach @else
                <div class="message">
                    There are no products in the menu
                </div>
                @endif
            </div>

            <!-- Success message for every CRUD operation  -->
            @if($message = Session::get('success'))
            <div class="success-message">
                <p>{{ $message }}</p>
            </div>
            @endif
        </div>
    </body>
</html>
