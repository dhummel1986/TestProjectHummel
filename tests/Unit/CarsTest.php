<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $cars = new cars();
        $cars->Make = 'Chevrolet';
        $cars->Model= 'Impala';
        $cars->Year= '2030';
        $this->assertTrue($cars->save());
    }
}
