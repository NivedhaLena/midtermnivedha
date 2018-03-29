<?php

namespace Tests\Unit;

use App\Cars;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CarDeleteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = Cars::find(18);
        //$user->destroy();
        if (!is_null($car)) {
            $car->destroy(18);
            $this->assertTrue($car->save());
        }

        //$user->delete;
        //$user=User::find(2);
        // $user->delete();
        $this->assertTrue($car=!NULL);
    }
}
