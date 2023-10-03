<?php

namespace Liloi\Vicards\API\Cards\Show;

use Liloi\API\Response;
use Liloi\Vicards\API\Method as SuperMethod;
use Liloi\Vicards\Domain\Cards\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));
        $response = new Response();

        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'entity' => $entity
        ]));

        return $response;
    }
}