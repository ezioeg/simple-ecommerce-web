<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/basket.css') }}"
        />
    </head>

    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />

            <div class="header-container">
                <a class="button" href="#">Basket</a>

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
                @if(session('basket')) @php $total = 0 @endphp
                @foreach(session('basket') as $id => $product)
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
                        <p class="name-price" style="text-align: center;">
                            Quantity : {{ $product["quantity"] }}
                        </p>

                        <a
                            href="{{ url('delete-basket', [$id]) }}"
                            onclick="return confirm('Do you want to remove from the basket?')"
                        >
                            <img
                                class="img"
                                style="max-width: 50px"
                                src="images/delete.png"
                                alt=""
                        /></a>
                    </div>
                </div>
                @php if(!$basket->isEmpty()){ $total += $product['price'] *
                $product['quantity']; } @endphp @endforeach
            </div>

            <p class="header-container">
                <b class="button">TOTAL: £{{ $total }}</b>
            </p>
            @endif

            <a class="button cancel-button" href="{{ route('menu.index') }}"
                >Back to menu</a
            >

            @if(session('basket'))
            <a
                class="button checkout-button"
                href="{{ route('checkout.index') }}"
            >
                Proceed to checkout
            </a>
            @else
            <div class="message">There are no products in the basket</div>
            <a
                class="disabled button checkout-button"
                href="{{ route('checkout.index') }}"
            >
                Proceed to checkout
            </a>

            @endif
        </div>
    </body>
</html>
