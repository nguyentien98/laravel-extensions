<?php

/*
 * This file is part of the Xuanquynh Laravel Extensions package.
 *
 * (c) Nguyễn Xuân Quỳnh
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace XuanQuynh\Laravel\Tests\Repositories;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\Database\Eloquent\Model;
use XuanQuynh\Laravel\Repositories\Repository;
use Illuminate\Contracts\Foundation\Application;

class RepositoryTest extends TestCase
{
    protected function tearDown()
    {
        m::close();
    }

    public function testModelMethod()
    {
        $repository = new class() extends Repository {
            public function getModelName()
            {
                return 'ModelClassName';
            }
        };

        $app = m::mock(Application::class);
        $app->shouldReceive('make')->once()->with('ModelClassName')->andReturn($model = m::mock(Model::class));

        $repository->setApplication($app);

        $this->assertSame($model, $repository->model());
        $this->assertSame($model, $repository->getModel());
    }

    public function testStoreMethod()
    {
        $repository = $this->createRepository();
        $repository->model()->shouldReceive('create')->once()->with(['key' => 'value']);
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

    public function testDestroyMethod()
    {
        $model = m::mock(Model::class);
        $model->shouldReceive('delete')->once();
        $repository = $this->createRepository();
        $repository->destroy($model);
    }

    public function testFindMethod()
    {
        $repository = $this->createRepository();
        $repository->model()->shouldReceive('find')->once()->with(1, ['*']);
        $repository->find(1, ['*']);

        $repository = $this->createRepository();
        $repository->model()->shouldReceive('find')->once()->with(3, ['foo', 'bar']);
        $repository->find(3, ['foo', 'bar']);
    }

    public function testFindOrFailMethod()
    {
        $repository = $this->createRepository();
        $repository->model()->shouldReceive('findOrFail')->once()->with(1, ['*']);
        $repository->findOrFail(1, ['*']);

        $repository = $this->createRepository();
        $repository->model()->shouldReceive('findOrFail')->once()->with(3, ['foo', 'bar']);
        $repository->findOrFail(3, ['foo', 'bar']);
    }

    public function testGetMethod()
    {
        $repository = $this->createRepository();
        $repository->model()->shouldReceive('get')->once()->with(['*']);
        $repository->get();

        $repository = $this->createRepository();
        $repository->model()->shouldReceive('get')->once()->with(['foo', 'bar']);
        $repository->get(['foo', 'bar']);
    }

    public function testPaginateMethod()
    {
        $repository = $this->createRepository();
        $repository->model()->shouldReceive('paginate')->once();
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
