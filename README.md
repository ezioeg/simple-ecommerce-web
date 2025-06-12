## 🛒 Simple Ecommerce Web  
E-commerce web application providing basic functionality for managing products and purchases. Includes an administration panel for product management, user registration, and purchase simulation.

### Features  
- **Product Management**: Create, edit, and delete products.  
- **User Registration**: Allows users to register and manage their accounts.  
- **Shopping Cart**: Add products to the cart and manage the purchase flow.  
- **Purchase Simulation**: Simulates product purchases.  
- **Simple Interface**: Clean and functional design without the use of CSS frameworks.

## Technologies Used
### Core
- [PHP](https://www.php.net/) `v7.3 / v8.0`  
- [Laravel](https://laravel.com/docs/8.x) `v8.12`  

### Styling
- **CSS3**: Styles implemented without the use of external frameworks or libraries.

## Setup
1. Install Laravel dependencies:

   ```bash
   composer install

2. Configure the environment file:

    * Rename .env.example to .env and set up your database credentials.

3. Generate the application key:

   ```bash
   php artisan key:generate

4. Run the migrations to create the database tables:

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
