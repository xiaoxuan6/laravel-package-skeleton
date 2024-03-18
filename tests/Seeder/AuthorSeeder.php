<?php
/**
 * This file is part of PHP CS Fixer.
 *
 * (c) xiaoxuan6 <1527736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vinhson\LaravelPackageSkeleton\Tests\Seeder;

use Illuminate\Database\Seeder;
use Vinhson\LaravelPackageSkeleton\Models\Author;

class AuthorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        factory(AUthor::class, 5)->create();
    }
}
