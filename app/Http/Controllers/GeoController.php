<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeoController extends Controller
{
    public function getGeoData($ipAddress)
    {
        $response = file_get_contents("https://ipinfo.io/{$ipAddress}/geo");
        return response()->json(json_decode($response), 200);
    }
}
