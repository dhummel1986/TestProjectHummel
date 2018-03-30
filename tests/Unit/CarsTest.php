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
        $cars = Cars::find(92);
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
    public function testinteger()
    {

        $cars = Cars::inRandomOrder()->first();
        $Year = (int) $cars->Year;
        $this->assertInternalType("int",$Year);

    }
    public function testmodelcal()
    {
        $cars = Cars::inRandomOrder()->first();
        $model = (string) $cars->Model;
        $this->assertInternalType("string",$model);
        dd($model);
    }


    public function testmakecar()
    {

        $cars = Cars::find(1);
        $this->assertContains($cars->Make, ["Honda", "Ford", "Toyota"]);

    }

}