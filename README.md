# Simple Ecommerce Web

Simple Ecommerce Web is an e-commerce web application that offers basic functions for product and purchase management. The application includes an administration panel to manage products, register users, and simulate purchases.

## Features

- **Product management**: Create, edit, and delete product information.
- **User registration**: Allows users to register and manage their accounts.
- **Shopping cart**: Add products to the cart and manage the purchase process.
- **Purchase simulation**: Simulate the purchase of products.
- **Simple interface**: Clean and functional design without using CSS frameworks.

## Technologies Used

- **PHP**: 7.3 / 8.0 version
- **Laravel**: 8.12 version
- **Pure CSS3**: Styles implemented without using CSS frameworks or libraries.

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/tu-usuario/simple-ecommerce-web.git


2. Navigate to the project directory:

   ```bash
   cd simple-ecommerce-web

3. Install Laravel dependencies:

   ```bash
   composer install

4. Configure the environment file:

    * Rename .env.example to .env and set up your database credentials.

5. Generate the application key:

   ```bash
   php artisan key:generate

6. Run the migrations to create the database tables:

   ```bash
   php artisan migrate
   
## Run
To start the application, run Laravel’s development server:

   ```bash
   php artisan serve
   ```
This will open the application in your default browser at http://localhost:8000.

## Contributions

Contributions are welcome. If you want to improve the project, please create a fork and submit a pull request.

## Contact

For questions or suggestions, you can contact me at [ezioeg@gmail.com].
