<?php

namespace Liloi\Vicards\API;

use Liloi\API\Manager;
use Liloi\API\Method;

/**
 * @inheritDoc
 */
class Tree
{
    static ?Manager $manager = null;

    /**
     * Collect API methods.
     */
    public static function collect(): void
    {
        $manager = new Manager();

        $manager->add(new Method('Vicards.Cards.Collection', '\Liloi\Vicards\API\Cards\Collection\Method::execute'));
        $manager->add(new Method('Vicards.Cards.Show', '\Liloi\Vicards\API\Cards\Show\Method::execute'));
        $manager->add(new Method('Vicards.Cards.Edit', '\Liloi\Vicards\API\Cards\Edit\Method::execute'));
        $manager->add(new Method('Vicards.Cards.Save', '\Liloi\Vicards\API\Cards\Save\Method::execute'));
        $manager->add(new Method('Vicards.Cards.Create', '\Liloi\Vicards\API\Cards\Create\Method::execute'));
        $manager->add(new Method('Vicards.Cards.Remove', '\Liloi\Vicards\API\Cards\Remove\Method::execute'));
        
        self::$manager = $manager;
    }

    /**
     * Execute one of the API methods.
     *
     * @return string
     * @throws \Liloi\API\Errors\NotFoundException
     */
    public static function execute(): string
    {
        $response = self::$manager->search($_POST['method'])->execute($_POST['parameters'] ?? []);
        return $response->asJson();
    }
}