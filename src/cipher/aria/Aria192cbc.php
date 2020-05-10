<?php

declare(strict_types=1);

namespace JohnConde\Encryption\Cipher\ARIA;


use JohnConde\Encryption\ACipherWithInitializationVector;
use JohnConde\Encryption\decrypt;
use JohnConde\Encryption\encryptWithPadding;

class Aria192cbc extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'ARIA-192-CBC';

    use encryptWithPadding, decrypt;
}