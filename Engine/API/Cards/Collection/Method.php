<?php

namespace Liloi\Vicards\API\Cards\Collection;

use Liloi\API\Response;
use Liloi\Vicards\API\Method as SuperMethod;
use Liloi\Vicards\Domain\Cards\Manager;

/**
 * Rune API: Blueprint.Blueprints.Show
 * @package Liloi\Librarium\API\Blueprints\Show
 */
class Method extends SuperMethod
{
    public static function execute(): Response
    {
        $collection = Manager::loadCollection();

        $response = new Response();
        $response->set('render', static::render(__DIR__ . '/Template.tpl', [
            'collection' => $collection
        ]));

        return $response;
    }
}