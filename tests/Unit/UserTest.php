<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;

class UserTest extends TestCase
{

    public function testCollectionCount(){
        $user= User::All();
        $recordCount = $user->count();
        $this->assertInternalType(IsType::TYPE_INT, $recordCount );
    }

}