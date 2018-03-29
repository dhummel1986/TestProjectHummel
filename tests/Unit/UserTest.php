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

    public function testinsert()
    {
        $user = new User();
        $user->name = 'Diana Hummel';
        $user->email= 'diana@yahoo.com';
        $user->password= '123test';
        $this->assertTrue($user->save());
    }
    public function testupdate()
    {
        $user = User::find(12);
        $user->Name = 'Steve Smith';
        $this->assertTrue($user->save());
    }

}

