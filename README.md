# Strict stubs for Laravel

- with declare(strict_types=1);
- uses final class
- migrations don't have a down function
- most docblocks have been removed

## Installation

```bash
composer require davarch/strict-stubs --dev
```

## Usage

### Automatically, use composer.json:

```json
"scripts": {
    "post-update-cmd": [
        "@php artisan davarch-stub:publish --force"
    ]
}
```

### Manual:
```bash
php artisan davarch-stub:publish
```

## Testing

```bash
composer test
```

## Credits
### Inspired by [spatie](https://github.com/spatie/laravel-stubs)
