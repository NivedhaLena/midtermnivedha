<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class IntegerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Cars::inRandomOrder()->first();
        $year= (int)$car->year;
        //$car->int("year");
        //dd($year);
        $this->assertInternalType('int', $year);
        //$car = Car::inRandomOrder()->first();
        //dd($car->Make);
        //dd(gettype($car->Make));
        //$this->assertInternalType('int', $car->year);

    }
}
