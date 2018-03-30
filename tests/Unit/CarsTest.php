<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\Cars;

class CarsTest extends TestCase
{

    public function testdelete()
{
        $cars = Cars::find(53);
        $cars-> Make = 'Chevrolet';
        $cars-> Model= 'Impala';
        $cars-> Year= '2030';
        $cars->save();
        $this->assertTrue($cars->delete());
    }
    public function testCollectionCount(){
        $cars= Cars::All();
        $recordCount = $cars->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount );
    }

public function testinsert()
{
$cars= new Cars();
$cars->Make= 'Chevrolet';
$cars->Model= 'Impala';
$cars->year= '2045';
$this->assertTrue($cars->save());

}
}