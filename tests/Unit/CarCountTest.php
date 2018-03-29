<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarCountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $carCount = Cars::count();
        echo 'Cars',$carCount;
        $this->assertTrue(true);
    }
}
