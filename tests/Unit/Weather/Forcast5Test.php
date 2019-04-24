<?php

namespace Tests\Unit\Weather;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class Forcast5Test extends TestCase
{
    /**
     * Success Forcast 5
     * 
     * Requirements:
     * City is required, string and valid
     * Country code is required, string and valid
     *
     * @return void
     */
    public function testSuccessForcast5()
    {
        $request = [
            'city' => 'Tokyo',
            'country_code' => 'jp'
        ];

        $response = $this->json('POST', '/api/weather/forcast5', $request);

        $response
            ->assertOk();
    }
}
