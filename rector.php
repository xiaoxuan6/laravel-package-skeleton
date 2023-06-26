<?php

declare(strict_types=1);
/**
 * This file is part of PHP CS Fixer.
 *
 * (c) vinhson <15227736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\{LevelSetList, SetList};

return static function (RectorConfig $rectorConfig): void {
    $rectorConfig->paths([
        __DIR__ . '/src',
        __DIR__ . '/tests'
    ]);

    $rectorConfig->importNames();
    $rectorConfig->importShortClasses(true);


    $rectorConfig->sets([
        LevelSetList::UP_TO_PHP_73,
        SetList::PHP_73,
        SetList::TYPE_DECLARATION,
        SetList::EARLY_RETURN
    ]);
};
