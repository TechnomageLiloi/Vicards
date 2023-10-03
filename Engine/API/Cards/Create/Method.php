<?php

namespace Liloi\Vicards\API\Cards\Create;

use Liloi\API\Response;
use Liloi\Vicards\API\Method as SuperMethod;
use Liloi\Vicards\Domain\Cards\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        Manager::create();
        return new Response();
    }
}