<?php

declare(strict_types=1);

namespace Encryption\Cipher\BF;

use Encryption\Cipher\ACipherNoInitializationVector;
use Encryption\Traits\DecryptNoIV;
use Encryption\Traits\EncryptWithPaddingNoIV;

final class Bfecb extends ACipherNoInitializationVector
{
    use DecryptNoIV;
    use EncryptWithPaddingNoIV;

    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 0;
    public const CIPHER = 'BF-ECB';
}
