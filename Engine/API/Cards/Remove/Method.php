<?php

namespace Liloi\Vicards\API\Cards\Remove;

use Liloi\API\Response;
use Liloi\Vicards\API\Method as SuperMethod;
use Liloi\Vicards\Domain\Cards\Manager;
use Liloi\Vicards\Domain\Cards\Statuses;

class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $entity = Manager::load(self::getParameter('key'));
        $entity->setStatus(Statuses::OBSOLETE);
        $entity->save();

        return new Response();
    }
}