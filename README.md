
## About CoreApplication

This is a plugin based laravel application. You can install your custom library or plugins via GUI easily.

## How to use

1. Clone the Application :
   git clone https://github.com/hamidrezakiani/CoreApplication.git

2. Install dependencies:
   php ^8.0
   mysql database
   composer ^2.0

3. Install vendor
   Run <code>composer install</code> on application root directory.
   Set your database congig .env file.
   Run <code>php artisan migrate</code>
   Run <code>php artisan db:seed UserSeeder</code>
   Run <code>php artisan serve</code>.


Now you can install library or plugin and see installed packages list.

*After installing each package, Run the:
                   <code>php artisan vendor:publish</code>
 to publish its necessary files.

## License

The CoreApplication is open-sourced Application licensed under the [MIT license].
