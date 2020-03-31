# Authentication Package

Authentication package created by Dexperts.

## About the authentication package

This package contains all the authentication logic and functionality. It can be imported into your laravel project with 
composer. This has been built up, for example, to reuse and apply login functionality.

## Install the authentication package

Note: you must already have a Laravel project to import this package.

#### Import the package

- create a folder named ```package``` in the root directory of your Laravel project.
- Open the Terminal in the package folder.
- Enter the ```composer create-project dexperts/authentication``` command in the Terminal.
- The package is created in your package folder.

#### Setup the package with a route

- Go to your ```routes``` folder and open the ```web.php``` file.
- Import the package above in the file like this:
```php
use Dexperts\Authentication\Auth;
```

- Create a new ```get``` request named ```/auth```. (You can copy the root / request)

```php
Route::get('/auth/{name}', function($sName) {
    $oAuth = new Auth();
    return view('welcome', [
        'name' => $oAuth->call($sName)
    ]);
});
```

- Go to the ```resource/views``` folder and open the ```welcome.blade.php``` file.
- Place somewhere the little piece of code in the php file:
```php
<?= $name; ?>
```
- $name is needed because the variable in the get request has been defined in the view. 
- You all set and run your project.

Enjoy :)!

## License
The MIT License (MIT)