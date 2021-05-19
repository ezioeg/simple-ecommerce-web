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

            <!-- products list-->
            <div class="grid-container">
                {{-- {{$products}} --}} @if(count($product)>0) @foreach($product
                as $pro)

                <div class="grid-item">
                    <!--added limit size for image(max-width)-->
                    @php $photo=explode(',',$pro->photo); @endphp
                    <img
                        class="img"
                        style="max-width: 250px"
                        src="{{ $photo[0] }}"
                        alt="{{ $photo[0] }}"
                    />
                    <p class="name-price">
                        {{ $pro->name }}: £{{ $pro->price }}
                    </p>

                    <a href="{{ url('add-basket/'.$pro->id) }}"">
                        <img
                            class="img"
                            style="max-width: 80px"
                            src="images/basket.png"
                            alt=""
                    /></a>
                </div>
                @endforeach @else
                <h4 class="empty-text" style="margin: 100px auto">
                    There are no products.
                </h4>
                @endif
 
            </div>

            <!-- Success message for every CRUD operation  -->
            @if($message = Session::get('success'))
            <div class="alert">
                <p> Message: {{$message}} </p>
            </div>  
            @endif
        </div>
    </body>
</html>
