# Laravel FireText

A Laravel wrapper for the firetext/php-sdk package

## Installation

```
composer require razorcreations/laravel-firetext

php artisan vendor:publish --provider="Razorcreations\FireText\ServiceProvider" --tag="config"
```

Set your FireText username+password OR your API token in the `config/firetext.php` file.

