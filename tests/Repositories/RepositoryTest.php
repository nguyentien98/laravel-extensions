<?php

/*
 * This file is part of the Sepiphy package.
 *
 * (c) Nguyễn Xuân Quỳnh <nguyenxuanquynh2210vghy@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sepiphy\Laravel\Tests\Repositories;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Eloquent\Model;
use Sepiphy\Laravel\Repositories\Repository;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Database\Eloquent\Builder;

class RepositoryTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function testGettersAndSetters()
    {
        $repository = new class() extends Repository {
            public function getModelName()
            {
                return 'ModelClassName';
            }
        };

        $repository
            ->setModel($model = m::mock(Model::class))
            ->setApplication($app = m::mock(Application::class))
        ;

        $this->assertSame($app, $repository->getApplication());
        $this->assertSame($model, $repository->getModel());
    }

    public function testStoreMethod()
    {
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('create')->once()->with(['key' => 'value']);
        $repository->store(['key' => 'value']);
    }

    public function testUpdateMethod()
    {
        $model = m::mock(Model::class);
        $model->shouldReceive('fill')->once()->with(['key' => 'value'])->andReturn($model);
        $model->shouldReceive('save')->once();
        $repository = $this->createRepository();
        $repository->update($model, ['key' => 'value']);
    }

    public function testDeleteMethod()
    {
        $model = m::mock(Model::class);
        $model->shouldReceive('delete')->once();
        $repository = $this->createRepository();
        $repository->delete($model);
    }

    public function testDestroyMethod()
    {
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('destroy')->once()->with($ids = [1, 2, 3]);
        $repository->destroy($ids);
    }

    public function testAllMethod()
    {
        $query = m::mock(Builder::class);
        $query->shouldReceive('all')->once()->with(['foo', 'bar']);
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('query')->once()->andReturn($query);
        $repository->all(['foo', 'bar']);
    }

    public function testFirstMethod()
    {
        $query = m::mock(Builder::class);
        $query->shouldReceive('first')->once()->with(['foo', 'bar']);
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('query')->once()->andReturn($query);
        $repository->first(['foo', 'bar']);
    }

    public function testFirstOrFailMethod()
    {
        $query = m::mock(Builder::class);
        $query->shouldReceive('firstOrFail')->once()->with(['foo', 'bar']);
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('query')->once()->andReturn($query);
        $repository->firstOrFail(['foo', 'bar']);
    }

    public function testFindMethod()
    {
        $query = m::mock(Builder::class);
        $query->shouldReceive('find')->once()->with(3, ['foo', 'bar']);
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('query')->once()->andReturn($query);
        $repository->find(3, ['foo', 'bar']);
    }

    public function testFindOrFailMethod()
    {
        $query = m::mock(Builder::class);
        $query->shouldReceive('findOrFail')->once()->with(3, ['foo', 'bar']);
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('query')->once()->andReturn($query);
        $repository->findOrFail(3, ['foo', 'bar']);
    }

    public function testPaginateMethod()
    {
        $query = m::mock(Builder::class);
        $query->shouldReceive('paginate')->once();
        $repository = $this->createRepository();
        $repository->getModel()->shouldReceive('query')->once()->andReturn($query);
        $repository->paginate();
    }

    protected function createRepository()
    {
        $model = m::mock(Model::class);

        $repository = new class() extends Repository {
            public function getModelName()
            {
                return 'ExampleClassName';
            }
        };

        $repository->setModel($model);

        return $repository;
    }
}
