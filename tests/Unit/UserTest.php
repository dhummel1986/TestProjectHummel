<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */



    public function testdelete()
    {
        $user = User::find(56);
        $user->Name = 'Diana Hummel';
        $user->email= 'diana@yahoo.com';
        $user->password= '123test';
        $user->save();
        $this->assertTrue($user->delete());
    }

}

