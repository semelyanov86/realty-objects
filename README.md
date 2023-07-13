# Realty Object

Realty Object is a Laravel application that displays real estate objects from Vtiger CRM. It's built with Laravel 10, PHP 8.1, Vue.js 3 with TypeScript, and MySQL.

## Installation Instructions

Follow these steps to install and run the Realty Object on your local machine:

1. **Clone the Repository**

   First, clone the repository to your local machine. Open your terminal, navigate to the directory where you want to store the project and run:

    ```
    git clone https://github.com/yourusername/realty-object.git
    ```

2. **Install Dependencies**

   Navigate into the project directory and install the Composer and NPM dependencies:

    ```
    cd realty-object
    composer install
    npm install
    ```

3. **Environment Configuration**

   Make a copy of the `.env.example` file and rename it to `.env`:

    ```
    cp .env.example .env
    ```

   Update the `.env` file with your database credentials (DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD).

4. **Generate Application Key**

   Generate a new application key:

    ```
    php artisan key:generate
    ```

5. **Run Migrations**

   Run the database migrations:

    ```
    php artisan migrate
    ```

6. **Compile Assets**

   Compile the frontend assets with:

    ```
    npm run dev
    ```

7. **Start the Server**

   Finally, start the Laravel server:

    ```
    php artisan serve
    ```

You should now be able to access the application at `http://localhost:8000`.

## Contributing

Please read [CONTRIBUTING.md](CONTRIBUTING.md) for details on our code of conduct, and the process for submitting pull requests to us.

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details.
