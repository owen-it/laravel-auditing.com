<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use Mockery as m;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $mock = m::mock('foo');

        $mock = m::mock(['foo' => 1, 'bar' => 2]);

        $mock = m::mock('my_foo', ['foo' => 1, 'bar' => 2]);

        $mock = m::mock('my_foo', function($m){
            $m->shouldReceive('method_name');
        });

        $mock = m::mock('stdClass');

        dd(get_called_class($mock));
    }
}
