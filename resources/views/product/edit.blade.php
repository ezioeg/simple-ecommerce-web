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
            href="{{ url('/css/edit.css') }}"
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

            <div class="flex-container">
                <div class="form-container">
                    <h2 class="" style="text-align: center">Edit product</h2>

                    @if ($errors->any())
                    <div class="header-container">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </div>
                    @endif

                    <form
                        action="{{ url('update-product/'.$product->id) }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf
                        <label for="pname">Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            value="{{$product->name}}"
                        />
                        <label for="pphoto">Photo</label>
                        <img
                            src="{{ asset('storage').'/'.$product->photo }}"
                            height="70px"
                            width="80px"
                        />
                        <input
                            type="file"
                            id="photo"
                            name="photo"
                            value="{{$product->photo}}"
                        />

                        <label for="pprice">Price</label>
                        <input
                            type="text"
                            id="price"
                            name="price"
                            value="{{$product->price}}"
                        />

                        <input type="submit" value="Edit" />
                    </form>
                </div>
            </div>
            <div>
                <a class="back-button" href="{{ route('product.index') }}">
                    Back
                </a>
            </div>
        </div>
    </body>
</html>
