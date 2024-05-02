<?php

/*
 * This file is part of james.xue/laravel-package-skeleto.
 *
 * (c) xiaoxuan6 <1527736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 *
 */

namespace Vinhson\LaravelPackageSkeleton\Events;

use Vinhson\LaravelPackageSkeleton\Models\Author;

class Event
{
    public Author $author;

    public function __construct(Author $author)
    {
        $this->author = $author;
    }
}
