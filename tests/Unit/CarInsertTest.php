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
        $car=new Cars();
        $car->Make='Toyota';
        $car->Model='123456ADF';
        $car->year='1994';
        //$user->save();
       // $this->assertTrue($user->save());
        $this->assertTrue($car=!NULL);
    }
}
