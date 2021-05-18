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
        </style>
    </head>

    <body>
        <div>
            <div class="header-container">
                <button class="button">Admin panel</button>

                <button class="button register">Register</button>
                <button class="button login">Login</button>
            </div>

            <div class="w3-container">
                <h2>Product list</h2>

                <table class="w3-table">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Points</th>
                    </tr>
                    <tr>
                        <td>Jill</td>
                        <td>Smith</td>
                        <td>50</td>
                    </tr>
                    <tr>
                        <td>Eve</td>
                        <td>Jackson</td>
                        <td>94</td>
                    </tr>
                    <tr>
                        <td>Adam</td>
                        <td>Johnson</td>
                        <td>67</td>
                    </tr>
                </table>
            </div>

            <button class="button back-button">Back</button>
            <button class="button create-button">Create product</button>
        </div>
    </body>
</html>
