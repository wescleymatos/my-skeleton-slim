<?php

namespace Core\Validation;

use Core\Utilities\CpfVerify;

class CpfAssertionConcern
{
    public static function assertIsValid(string $cpf)
    {
        AssertionConcern::assertArgumentNotEmpty($cpf, 'CPF can not be null.');
        self::verify($cpf, 'CPF is not valid.');
    }

    private static function verify(string $cpf, string $message)
    {
        if (!CpfVerify::isValid($cpf)) {
            throw new \InvalidArgumentException($message);
        }
    }
}
