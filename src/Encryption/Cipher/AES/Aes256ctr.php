<?php

declare(strict_types=1);

namespace Encryption\Cipher\AES;

use Encryption\Cipher\ACipherWithInitializationVector;
use Encryption\Traits\Decrypt;
use Encryption\Traits\EncryptWithPadding;

final class Aes256ctr extends ACipherWithInitializationVector
{
    use Decrypt;
    use EncryptWithPadding;

    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 16;
    public const CIPHER = 'AES-256-CTR';
}
