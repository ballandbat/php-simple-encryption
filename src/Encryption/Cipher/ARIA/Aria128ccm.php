<?php

declare(strict_types=1);

namespace Encryption\Cipher\ARIA;

use Encryption\Cipher\ACipherAeadMode;
use Encryption\Traits\DecryptAeadMode;
use Encryption\Traits\EncryptWithPaddingAeadMode;

final class Aria128ccm extends ACipherAeadMode
{
    use DecryptAeadMode;
    use EncryptWithPaddingAeadMode;

    public const BLOCK_SIZE = 8;
    public const IV_LENGTH = 12;
    public const CIPHER = 'ARIA-128-CCM';
}
