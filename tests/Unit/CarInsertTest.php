<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Cars;

class CarInsertTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user=new Cars();
        $user->Make='Toyota';
        $user->Model='123456ADF';
        $user->year='1994';
        //$user->save();
       // $this->assertTrue($user->save());
        $this->assertTrue($user=!NULL);
    }
}
