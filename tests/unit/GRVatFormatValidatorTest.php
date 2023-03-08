<?php

namespace rocketfellows\GRVatFormatValidator\tests\unit;

use PHPUnit\Framework\TestCase;
use rocketfellows\GRVatFormatValidator\GRVatFormatValidator;

class GRVatFormatValidatorTest extends TestCase
{
    /**
     * @var GRVatFormatValidator
     */
    private $validator;

    protected function setUp(): void
    {
        parent::setUp();

        $this->validator = new GRVatFormatValidator();
    }

    /**
     * @dataProvider getVatNumbersProvidedData
     */
    public function testValidationResult(string $vatNumber, bool $isValid): void
    {
        $this->assertEquals($isValid, $this->validator->isValid($vatNumber));
    }

    public function getVatNumbersProvidedData(): array
    {
        return [
            [
                'vatNumber' => '123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => '000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => '111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => '999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EL123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EL000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EL111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'EL999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GR123456789',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GR000000000',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GR111111111',
                'isValid' => true,
            ],
            [
                'vatNumber' => 'GR999999999',
                'isValid' => true,
            ],
            [
                'vatNumber' => '1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => '12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'EL1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'EL12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GR1234567890',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GR12345678',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'DE123456789',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'EL12345678a',
                'isValid' => false,
            ],
            [
                'vatNumber' => 'GR12345678a',
                'isValid' => false,
            ],
            [
                'vatNumber' => '0',
                'isValid' => false,
            ],
            [
                'vatNumber' => '1',
                'isValid' => false,
            ],
            [
                'vatNumber' => '',
                'isValid' => false,
            ],
        ];
    }
}
