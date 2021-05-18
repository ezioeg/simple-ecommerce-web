<!DOCTYPE html>
<html>
    <head>
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

            input[type="text"] {
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
                <button class="button">Admin Panel</button>

                <button class="button register">Register</button>
                <button class="button login">Login</button>
            </div>

            <div class="flex-container">
                <div class="form-container">
                    <h2 class="" style="text-align: center">Create product</h2>
                    <form action="#">
                        <label for="pname">Name</label>
                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Product name.."
                        />
                        <label for="pimage">Photo</label>
                        <input
                            type="text"
                            id="image"
                            name="image"
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
            <button class="button back-button">Back</button>
        </div>
    </body>
</html>
