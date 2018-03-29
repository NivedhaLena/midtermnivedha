<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Cars::inRandomOrder()->first();
        $value=$car->Make;
        $this->assertContains($value, ['Honda','Toyota','ford']);
    }
}
