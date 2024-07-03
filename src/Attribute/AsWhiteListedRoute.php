<?php

namespace WhiteListBundle\Attribute;

class AsWhiteListedRoute
{
    public function __construct(
        private string $message = 'Unauthorized access to this route.'
    )
    {
    }

}