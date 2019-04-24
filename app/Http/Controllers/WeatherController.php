<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\Weather\Forcast5;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function __construct(Client $http)
    {
        $this->http = $http;
    }

    public function forcast5(Forcast5 $request)
    {
        $query = [
            'q' => "$request->city, $request->country_code",
            'appid' => env('WEATHER_API_KEY')
        ];

        $response = $this->http->get('http://api.openweathermap.org/data/2.5/forecast', 
            ['query' => $query]
        );

        return $response->getBody();
    }
}
