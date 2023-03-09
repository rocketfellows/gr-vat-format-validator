<?php

namespace rocketfellows\GRVatFormatValidator;

use rocketfellows\CountryVatFormatValidatorInterface\CountryVatFormatValidator;

class GRVatFormatValidator extends CountryVatFormatValidator
{
    private const VAT_NUMBER_PATTERN = '/^(EL|GR)?\d{9}$/';

    protected function isValidFormat(string $vatNumber): bool
    {
        return (bool) preg_match(self::VAT_NUMBER_PATTERN, $vatNumber);
    }
}
