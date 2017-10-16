# Jarvis (alpha)

Jarvis is a simple and smart way to create, package and
        manage Laravel views (themes) built with the
        <a href="https://github.com/shawnsandy/jarvis-toolkit" class="headliners target="_blank">Jarvis toolkit,</a> thats me :) yay.





## Install

Via Composer

* To install the Alpha version. Load package from VCS repository, add the following to your composer.json

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

## Usage

__Quick Start__

* Add the VALIDATION_KEY to you Laravel .env file

``` text

VALIDATION_KEY=1234567890


```

* Open `routes\wep.php` and add the following to you routes

``` php

Route::group(['prefix' => config("jarvis.base_url")], function () {


    // theme setup and install routes
    Jarvis::install_routes();
    // pages
    Jarvis::routes();

});


```

* To install and publish theme files go to  `yourapp.com/jarvis/themes/index`, click on the `Lets get started` button. Enter the validation_key in the and hit `Publish Vendor files`. You should be set to go.

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
