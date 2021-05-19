<!DOCTYPE html>
<html>
    <head>
        <link
            rel="stylesheet"
            href="https://www.w3schools.com/w3css/4/w3.css"
        />
        <style>
            .header-container {
                flex-grow: 1;
                text-align: center;
            }

            .button {
                padding: 32px 64px;
                text-align: center;
                text-decoration: none;
                text-transform: uppercase;
                display: inline-block;
                margin: 4px 2px;
                cursor: pointer;
            }

            .back-button {
                position: absolute;
                bottom: 5px;
                left: 5px;
            }
            .create-button {
                position: absolute;
                bottom: 5px;
                right: 5px;
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
                margin: 200px 800px;
                font-size: 20px;
            }
        </style>
    </head>

    <body>
        <div>
            <div class="header-container">
                <a class="button">Admin Panel</a>

                <a class="button register">Register</a>
                <a class="button login">Login</a>
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

                    @foreach($product as $pro)
                    <tr>
                        <td>{{ $pro->name }}</td>
                        <td>
                            <img
                                src="{{ URL::to($pro->photo) }}"
                                height="70px"
                                width="80px"
                            />
                        </td>
                        <td>${{ $pro->price }}</td>
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
            <div class="alert">
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
