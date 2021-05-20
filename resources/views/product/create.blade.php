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
            href="{{ url('/css/create.css') }}"
        />
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
                    <h2 class="" style="text-align: center">Create product</h2>
                    <form
                        action="{{ route('product.store') }}"
                        method="POST"
                        enctype="multipart/form-data"
                    >
                        @csrf

                        <label for="pname">Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Product name.."
                        />
                        <label for="pphoto">Photo</label>
                        <input
                            type="file"
                            id="photo"
                            name="photo"
                            placeholder="Product photo.."
                        />

                        <label for="pprice">Price</label>
                        <input
                            type="text"
                            id="price"
                            name="price"
                            placeholder="Product price.."
                        />

                        <input type="submit" value="Create" />
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
