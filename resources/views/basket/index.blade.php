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

            .disabled {
                cursor: not-allowed;
                opacity: 0.5;
                text-decoration: none;
                pointer-events: none;
            }
            .alert {
                text-align: center;
                background-color: black;
                padding: 10px 0px;
                margin: 300px 800px;
                font-size: 20px;
                color: white;
            }
        </style>
    </head>

    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />

            <div class="header-container">
                <a class="button" href="#">Basket</a>

                <a class="button register" href="#">Register</a>
                <a class="button login" href="#">Login</a>

                <!-- Success message for every CRUD operation  -->
                @if($message = Session::get('success'))
                <div class="alert">
                    <p>Message: {{ $message }}</p>
                </div>
                @endif
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
                            src="{{ $product['photo'] }}"
                            alt=""
                        />
                    </div>
                    <!-- <p class="name-price"> {{ $product["quantity"] }}</p> -->
                    <div class="product-info">
                        <p class="name-price">
                            {{ $product["name"] }} : £{{ $product["price"] }}
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
                >Cancel order</a
            >

            @if(session('basket'))
            <a
                class="button checkout-button"
                href="{{ route('checkout.index') }}"
            >
                Proceed to checkout
            </a>
            @else
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
