# Greece vat format validator

![Code Coverage Badge](./badge.svg)

This component provides Greece vat number format validator.

Implementation of interface **rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidatorInterface**

Depends on https://github.com/rocketfellows/country-vat-format-validator-interface

## Installation

```shell
composer require rocketfellows/gr-vat-format-validator
```

## Usage example

Valid Greece vat number:

```php
$validator = new GRVatFormatValidator();
$validator->isValid('123456789');
$validator->isValid('EL123456789');
$validator->isValid('GR123456789');
```

Returns:

```shell
true
true
true
```

Invalid Greece vat number:

```php
$validator = new GRVatFormatValidator();
$validator->isValid('1234567890');
$validator->isValid('12345678');
$validator->isValid('EL1234567890');
$validator->isValid('EL12345678');
$validator->isValid('GR1234567890');
$validator->isValid('GR12345678');
```

```shell
false
false
false
false
false
false
```

## Contributing

Welcome to pull requests. If there is a major changes, first please open an issue for discussion.

Please make sure to update tests as appropriate.
