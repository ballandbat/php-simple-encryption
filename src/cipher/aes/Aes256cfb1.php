<?php

declare(strict_types=1);

namespace JohnConde\Encryption\Cipher\AES;


use JohnConde\Encryption\ACipherWithInitializationVector;
use JohnConde\Encryption\decrypt;
use JohnConde\Encryption\encryptWithPadding;

class Aes256cfb1 extends ACipherWithInitializationVector
{
    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'AES-256-CFB1';

    use encryptWithPadding, decrypt;
}
