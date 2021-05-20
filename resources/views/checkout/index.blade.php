<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/checkout.css') }}"
        />
    </head>

    <body>
        <div>
            <img src="images/logo.png" class="logo" width="300" height="300" />
            <div class="header-container">
                <a class="button" href="#">Checkout</a>

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
            <div class="flex-container">
                <div class="row">
                    <div class="col-25">
                        <div class="checkout-container">
                            <h4 style="color: white">
                                Basket
                                <span class="price" style="color: white"
                                    ><i class="fa fa-shopping-basket"></i>
                                </span>
                            </h4>

                            @if(session('basket')) @php $total = 0 @endphp
                            @foreach(session('basket') as $id => $product)
                            <p style="color: white">
                                {{ $product["name"] }} x
                                {{ $product["quantity"] }}
                                <span class="price"
                                    >£{{ $product["price"] }}</span
                                >
                            </p>

                            @php if(!$basket->isEmpty()){ $total +=
                            $product['price'] * $product['quantity']; } @endphp
                            @endforeach

                            <hr />
                            <p style="color: white">
                                Total
                                <span class="price"
                                    ><b>£{{ $total }}</b></span
                                >
                            </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-75">
                        <div class="checkout-container">
                            <form
                                action="{{ route('checkout.store') }}"
                                method="POST"
                                enctype="multipart/form-data"
                            >
                                @csrf

                                <div class="row">
                                    <div class="col-50">
                                        <h3 style="color: white">
                                            Billing Address
                                        </h3>
                                        <label for="fullname">Full Name</label>
                                        <input
                                            type="text"
                                            id="fullname"
                                            name="fullname"
                                            placeholder="John M. Doe"
                                        />
                                        <label for="email"> Email</label>
                                        <input
                                            type="text"
                                            id="email"
                                            name="email"
                                            placeholder="john@example.com"
                                        />
                                        <label for="address"> Address</label>
                                        <input
                                            type="text"
                                            id="address"
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
                                        <label for="cardname"
                                            >Name on Card</label
                                        >
                                        <input
                                            type="text"
                                            id="cardname"
                                            name="cardname"
                                            placeholder="John More Doe"
                                        />
                                        <label for="cardnumber"
                                            >Credit card number</label
                                        >
                                        <input
                                            type="text"
                                            id="cardnumber"
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

                                    <input
                                        hidden
                                        type="text"
                                        id="total"
                                        name="total"
                                        value="{{ $total ?? '' }}"
                                    />
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
