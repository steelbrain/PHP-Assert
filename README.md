PHP-Assert
=========

PHP-Assert contains a few of assert functions inspired from those of HHVM

#### API

```php
function invariant(bool $clause, string $message = ''){ }
function invariant_violation(string $message = ''){ }
```

#### Example

```php
use steelbrain\assert;
$a = 'Something';
$b = 'Something';
invariant($a === $b, 'A and B are not equal');

if (!array_key_exists('REMOTE_ADDR', $_SERVER)) {
  invariant_violation('This script is not to be executed from CLI');
}
```

#### License

This project is licensed under the terms of MIT License. See the LICENSE file for more info.
