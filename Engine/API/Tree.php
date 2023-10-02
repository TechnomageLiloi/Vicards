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