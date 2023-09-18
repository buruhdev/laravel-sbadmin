# Laravel SBAdmin Theme Integration

[![Latest Version on Packagist](https://img.shields.io/packagist/v/buruhdev/laravel-sbadmin.svg?style=flat-square)](https://packagist.org/packages/buruhdev/laravel-sbadmin)

<!-- [![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3Arun-tests+branch%3Amain) -->
<!-- [![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/:vendor_slug/:package_slug/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/:vendor_slug/:package_slug/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain) -->

[![Total Downloads](https://img.shields.io/packagist/dt/buruhdev/laravel-sbadmin.svg?style=flat-square)](https://packagist.org/packages/buruhdev/laravel-sbadmin)

This package will help you to adding [bootstrap sbadmin](https://github.com/startbootstrap/startbootstrap-sb-admin) template to your laravel app.

<!-- ## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/:package_name.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/:package_name)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards). -->

## Installation

You can install the package via composer:

```bash
composer require buruhdev/laravel-sbadmin
```

You can publish the config file with:

```bash
php artisan vendor:publish --provider="Buruhdev\Sbadmin\SbadminServiceProvider" --tag="config"
```

This is the contents of the published config file:

```php
return [
    /*
    |--------------------------------------------------------------------------
    | Author Name
    |--------------------------------------------------------------------------
    |
    | This value allow you to change author meta tag in HTML head
    |
    */

    'author' => '',


    /*
    |--------------------------------------------------------------------------
    | Description
    |--------------------------------------------------------------------------
    |
    | This value allow you to change description meta tag in HTML head
    |
    */

    'description' => '',

    /*
    |--------------------------------------------------------------------------
    | Privacy Policy Link
    |--------------------------------------------------------------------------
    |
    | This option allow you to show or hide the 'privacy policy' link
    | at the bottom of SBAdmin theme and adjust the link to page
    | or file of your website policy and privacy declaration
    |
    */

    'show_privacy_policy_link' => true,
    'privacy_policy_link' => 'http://localhost',

    /*
    |--------------------------------------------------------------------------
    | Terms and Conditions Link
    |--------------------------------------------------------------------------
    |
    | This option allow you to show or hide the 'Terms & Conditions' link
    | at the bottom of SBAdmin theme and adjust the link to page
    | or file of your website terms & conditions declaration
    |
    */

    'show_terms_conditions_link' => true,
    'terms_conditions_link' => 'http://localhost',
];
```

Finally, you need to publish the views using

```bash
php artisan vendor:publish --provider="Buruhdev\Sbadmin\SbadminServiceProvider" --tag="sbadmin-theme"
```

## Usage

You can use the published views to start using the sbadmin theme

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Credits

-   [aziyan99](https://github.com/aziyan99)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
