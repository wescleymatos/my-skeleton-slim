<?php

namespace Core\Validation;

class PasswordAssertionConcern
{
    public static function assertIsValid(string $password)
    {
        AssertionConcern::assertArgumentNotEmpty($password, 'Password is not valid.');
    }

    public static function encrypt(string $password): string
    {
        $options = [
            'cost' => 7
        ];

        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public static function verify(string $password, string $hash): bool
    {
        return password_verify($password, $hash);
    }
}
