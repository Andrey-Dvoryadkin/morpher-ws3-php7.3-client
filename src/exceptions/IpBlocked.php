<?php
namespace Morpher\Ws3Client;

class IpBlocked extends ServiceDenied
{
    function __construct(string $message, int $code)
    {
        parent::__construct($message, $code);
    }
}