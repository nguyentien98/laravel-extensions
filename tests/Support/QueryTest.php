<?php

namespace XuanQuynh\Laravel\Tests\Support;

use Illuminate\Http\Request;
use PHPUnit\Framework\TestCase;
use XuanQuynh\Laravel\Support\Query;
use Illuminate\Database\Query\Builder;
use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Query\Grammars\Grammar;
use Illuminate\Database\Query\Processors\Processor;

class QueryTest extends TestCase
{
    public function testFromClause()
    {
        (new HasFromQuery)->build($builder = $this->createBuilder(), $this->createRequest());

        $this->assertSame('select * from "foo"', $builder->toSql());
    }

    public function testSelectClause()
    {
        (new HasSelectQuery)->build($builder = $this->createBuilder(), $this->createRequest());

        $this->assertSame('select "first", "second" from "foo"', $builder->toSql());
    }

    public function testWhereClause()
    {
        (new HasWhereQuery)->build($builder = $this->createBuilder(), $this->createRequest());

        $this->assertSame('select * from "foo" where "bar" = ?', $builder->toSql());
    }

    public function testOrderByClause()
    {
        (new HasOrderByQuery)->build($builder = $this->createBuilder(), $this->createRequest());

        $this->assertEquals('select * from "foo" order by "third" asc', $builder->toSql());
    }

    public function testLimitClause()
    {
        (new HasLimitQuery)->build($builder = $this->createBuilder(), $this->createRequest());

        $this->assertEquals('select * from "foo" limit 5', $builder->toSql());
    }

    public function testLimitOffsetClause()
    {
        (new HasOffsetQuery)->build($builder = $this->createBuilder(), $this->createRequest());

        $this->assertEquals('select * from "foo" limit 5 offset 7', $builder->toSql());
    }

    /**
     * Create a query builder instance.
     *
     * @return Builder
     */
    protected function createBuilder()
    {
        return new Builder(
            $this->createMock(ConnectionInterface::class), new Grammar, new Processor
        );
    }

    /**
     * Create a request instance.
     *
     * @return Request
     */
    protected function createRequest()
    {
        return Request::create('http://localhost');
    }
}

class HasFromQuery extends Query
{
    public function buildFrom($builder, $request)
    {
        $builder->from('foo');
    }
}

class HasSelectQuery extends HasFromQuery
{
    public function buildSelect($builder, $request)
    {
        $builder->select('first', 'second');
    }
}

class HasWhereQuery extends HasFromQuery
{
    public function buildWhere($builder, $request)
    {
        $builder->where('bar', $request->query('name', 'value'));
    }
}

class HasOrderByQuery extends HasFromQuery
{
    public function buildOrderBy($builder, $request)
    {
        $builder->orderBy('third');
    }
}

class HasLimitQuery extends HasFromQuery
{
    public function buildLimit($builder, $request)
    {
        $builder->limit(5);
    }
}

class HasOffsetQuery extends HasLimitQuery
{
    public function buildOffset($builder, $request)
    {
        $builder->offset(7);
    }
}
