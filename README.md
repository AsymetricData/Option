# AsymetricData Option Library

A PHP library for working with optional values using the Option pattern. The library provides a concise and expressive way to handle scenarios where a value may or may not be present.

## Installation

To use this library in your project, you can install it via [Composer](https://getcomposer.org/):

```bash
composer require asymetricdata/option
```

## Example Usage

```php
<?php

require 'vendor/autoload.php';

use AsymetricData\Option\Contracts\Option;
use AsymetricData\Option\None;
use AsymetricData\Option\Some;

class User {
    public function __construct(
        public string $nickname
    ) {}

    public static function find(int $id): User {
        return new User('AsymetricData');
    }

    public function getNickname(): string {
        return $this->nickname;
    }
}

/**
 * @return Option<User>
 */
function findUser(int $id): Option {
    // Some logic to find user
    $user = User::find($id);
    // Alternatively, set $user to null for testing None case
    //$user = null;

    return $user ? new Some($user) : new None($user);
}

$user = findUser(12)->unwrapOr(null)?->getNickname();

echo $user;
```

In this example, the findUser function returns an Option type (either Some or None). You can then use the unwrapOr method to retrieve the value if it exists, or provide a default value if it doesn't.