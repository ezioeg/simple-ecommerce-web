<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://www.w3schools.com/w3css/4/w3.css"
        />
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ url('/css/products.css') }}"
        />
    </head>

    <body>
        <div>
            <div class="header-container">
                <a class="button">Admin Panel</a>

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

            <div class="w3-container">
                <h2>Product list</h2>

                <table class="w3-table">
                    <tr>
                        <th>Name</th>
                        <th>Photo</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>

                    @foreach($products as $pro)
                    <tr>
                        <td>{{ $pro->name }}</td>
                        <td>
                            <img
                                src="{{ asset('storage').'/'.$pro->photo }}"
                                height="70px"
                                width="80px"
                            />
                        </td>
                        <td>£{{ $pro->price }}</td>
                        <td>
                            <a href="{{ URL::to('edit-product/'.$pro->id) }}"
                                >Edit</a
                            >
                            <a
                                href="{{ URL::to('delete-product/'.$pro->id) }}"
                                onclick="return confirm('Do you want to remove this product?')"
                                >Delete</a
                            >
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <!-- Success message for every CRUD operation  -->
            @if($message = Session::get('success'))
            <div class="message">
                <p>{{ $message }}</p>
            </div>
            @endif

            <!-- <a class="button back-button" href="#">Back</a> -->
            <a class="button create-button" href="{{ route('product.create') }}"
                >Create product</a
            >
        </div>
    </body>
</html>
