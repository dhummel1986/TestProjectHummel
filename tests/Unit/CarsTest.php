<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarsTest extends TestCase
{
    public function testdelete()
{
        $cars = Cars::find(51);
        $cars-> Make = 'Chevrolet';
        $cars-> Model= 'Impala';
        $cars-> Year= '2030';
        $cars->save();
        $this->assertTrue($cars->delete());
    }
}