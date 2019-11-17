<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:




```sh
#!/bin/sh
composer install
php artisan migrate:fresh
php artisan multiauth:seed --role=super
php artisan multiauth:role editor 
php artisan multiauth:role publisher
php artisan multiauth:make {guard}  # ==> for make another auth, change {guard} with e.g. student or what
php artisan multiauth:rollback {guard} #==> delete all another auth, change {guard} with e.g. student or what
php artisan serve --port=8000

```

chaneg this file  /vendor/bitfumes/laravel-multiauth/Http/Controllers/LoginController.php  to:

```php
...
use Bitfumes\Multiauth\Model\Admin;
...

class LoginController extends Controller
{
	....

	protected function validateLogin(Request $request)
    {
        $active = Admin::where('email',$request->email)->first()->active;
        $request->validate([
            'email'    => 'required|string',
            'password' => 'required|string',
        ]);
        if(!$active){
            return redirect()->back()->with('erroractive','Tell Super Admin to activate your account !');
        }

    }
	
	....
}
```

Open up your browser and make request on url http://localhost:8000/admin


## Security Vulnerabilities

this package support from : https://github.com/bitfumes/laravel-multiauth

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [ventuscode@gmail.com](mailto:ventuscode@gmail.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
