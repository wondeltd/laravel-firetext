# Laravel FireText

A Laravel wrapper for the firetext/php-sdk package

## Installation

All being well, you should have a services.php config file, under the config directory in your laravel project. Add the following to it

```
'firetext' => [
        'token' => env('FIRETEXT_TOKEN')
        'from'  => env('FIRETEXT_FROM')
    ]
```
Once you've done that, create a new firetext account if you haven't already got one, add the token to your env and you are good to go


