<?php
declare(strict_types=1);

namespace Shlinkio\Shlink\Core\Exception;

use Throwable;
use function sprintf;

class InvalidUrlException extends RuntimeException
{
    public static function fromUrl($url, Throwable $previous = null)
    {
        $code = $previous !== null ? $previous->getCode() : -1;
        return new static(sprintf('Provided URL "%s" is not an existing and valid URL', $url), $code, $previous);
    }
}
