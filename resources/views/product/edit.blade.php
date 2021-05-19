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

            /* CONTACT FORM */
            .flex-container {
                display: flex;
                justify-content: center;
                padding: 100px 200px;
            }

            .form-container {
                /* width: 50%; */
                padding: 20px;
            }

            input[type="text"],
            input[type="file"] {
                width: 100%;
                padding: 12px;
                box-sizing: border-box;
                margin-top: 6px;
                margin-bottom: 16px;
                resize: vertical;
            }

            input[type="submit"] {
                padding: 12px 20px;
                border: none;
                cursor: pointer;
            }

            .back-button {
                position: absolute;
                bottom: 5px;
                left: 5px;
                text-transform: uppercase;
                cursor: pointer;
                padding: 32px 64px;
            }

            .register {
                position: absolute;
                right: 190px;
            }
            .login {
                position: absolute;
                right: 5px;
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

            <div class="flex-container">
                <div class="form-container">
                    <h2 class="" style="text-align: center">Edit product</h2>
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
