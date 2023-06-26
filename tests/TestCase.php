<?php
/**
 * This file is part of PHP CS Fixer.
 *
 * (c) xiaoxuan6 <15227736751@qq.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */
namespace Vinhson\LaravelPackageSkeleton\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Database\Schema\Blueprint;
use Vinhson\LaravelPackageSkeleton\LaravelPackageSkeletonServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Setup the test environment.
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();

//        $this->setUpDatabase();
    }

    /**
     * Get package providers.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageProviders($app): array
    {
        return [
            LaravelPackageSkeletonServiceProvider::class
        ];
    }

    /**
     * @deprecated
     */
    private function setUpDatabase(): void
    {
        $this->app['db']->connection()->getSchemaBuilder()->dropIfExists('authors');

        $this->app['db']->connection()->getSchemaBuilder()->create('authors', function (Blueprint $table): void {
            $table->increments('id');
            $table->string('name');
            $table->timestamps();
        });
    }
}
