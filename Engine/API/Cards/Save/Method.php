<?php

namespace Liloi\Vicards\API\Cards\Save;

use Liloi\API\Response;
use Liloi\Vicards\API\Method as SuperMethod;
use Liloi\Vicards\Domain\Cards\Manager;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));

        $entity->setTitle(self::getParameter('title'));
        $entity->setProgram(self::getParameter('program'));
        $entity->setStatus(self::getParameter('status'));

        $entity->save();

        return new Response();
    }
}