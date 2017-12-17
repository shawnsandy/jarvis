# Jarvis (alpha)

Jarvis is a simple and smart way to create and
        manage Laravel views (themes).

![Alt text](/jarvis-theme-cover.jpeg?raw=true)



## Install

Via Composer

* To install the Alpha version, add the following VCS repository add the following to your composer.json

```
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/shawnsandy/jarvis"
        }
    ],

```
* From command line run the following

``` bash
composer require shawnsandy/jarvis dev-master
```

### Laravel 5.5x Bluma presets

- Install

>Install this preset via composer `require laravel-frontend-presets/bulma`. Laravel 5.5.x will automatically discover this package for you

## Usage

__Quick Start__

* Add the VALIDATION_KEY to you Laravel .env file *min 8 characters, numbers letters, underscore, dashes*

``` text
VALIDATION_KEY=1234567890_valdiation-key

```

* Open `routes\wep.php` and add the following routes

``` php
Route::group(['prefix' => config("jarvis.base_url")], function () {
    // theme setup and install routes
    Jarvis::install_routes();
    // Demo pages
    Jarvis::routes();
});
```



* To install and publish theme files go to  `yourapp.com/jarvis/themes/index`, click on the `Lets get started` button.
* Enter the validation_key in the and hit `Publish Vendor files`. You should be set to go.


![Alt text](/jarvis-setup.jpg?raw=true)

![Alt text](/jarvis-install.jpeg?raw=true)



* To visit a demo page go to `yourapp.com/jarvis/view/index`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Sandy][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
