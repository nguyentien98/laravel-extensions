<?php declare(strict_types=1);

/*
 * This file is part of the Sepiphy package.
 *
 * (c) Quynh Xuan Nguyen <seriquynh@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sepiphy\Laravel\Tests\Support;

use Mockery as m;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Facades\Request;
use Sepiphy\Laravel\Support\Presenter;

class PresenterTest extends TestCase
{
    protected function tearDown(): void
    {
        m::close();
    }

    public function testGetAdditionalAttribute()
    {
        $presenter = new Presenter(null, ['name' => 'Xuan Quynh']);

        $this->assertSame('Xuan Quynh', $presenter->name);
    }

    public function testDynamicPropertyCallsMethod()
    {
        $presenter = new class extends Presenter {
            public function name()
            {
                return 'Xuan Quynh';
            }
        };

        $this->assertSame('Xuan Quynh', $presenter->name);
    }

    public function testGetModelProperty()
    {
        $presenter = new Presenter(new class {
            public $name = 'Xuan Quynh';
        });

        $this->assertSame('Xuan Quynh', $presenter->name);
    }

    public function testCallModelMethod()
    {
        $presenter = new Presenter(new class {
            public function name()
            {
                return 'Xuan Quynh';
            }
        });

        $this->assertEquals('Xuan Quynh', $presenter->name());
    }

    public function testGetFormValue()
    {
        $presenter = new class extends Presenter {
            public function nameFormValue()
            {
                return 'Xuan Quynh';
            }
        };

        Request::shouldReceive('old')->with('name', 'Xuan Quynh')->once();

        $presenter->getFormValue('name');
    }
}
