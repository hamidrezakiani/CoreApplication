
## About CoreApplication

This is a plugin based laravel application. You can install your custom library or plugins via GUI easily.

## How to use

###1. Clone the Application :
   <code>git clone https://github.com/hamidrezakiani/CoreApplication.git<code>

###2. Install dependencies:
   php ^8.0 <br />
   mysql database <br />
   composer ^2.0 <br />

###3. Install vendor
   Run <code>composer install</code> on application root directory <br />
   Set your database congig .env file <br />
   Run <code>php artisan migrate</code> <br />
   Run <code>php artisan db:seed UserSeeder</code> <br />
   Run <code>php artisan serve</code> <br />


###Now you can install library or plugin and see installed packages list.

*After installing each package, Run the: <br />
                   <code>php artisan vendor:publish</code> <br />
 to publish its necessary files. <br />

## License

The CoreApplication is open-sourced Application licensed under the [MIT license].
