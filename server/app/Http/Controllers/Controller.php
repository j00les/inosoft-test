<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController {
    function getMeasurements() {
        $measurements = [
            [
                'id' => 1,
                'name' => 'SHP',
            ],

            [
                'id' => 2,
                'name' => 'BKT',
            ],

            [
                'id' => 3,
                'name' => 'CTN',
            ],
        ];

        return $measurements;
    }

    function getCurrencies() {
        $currencies = [
            [
                'id' => 1,
                'name' => 'usd',
            ],
            [
                'id' => 2,
                'name' => 'aed',
            ],
        ];

        return $currencies;
    }

    function getCompanies() {
        $companies = [
            ['id' => 1, 'name' => 'PT.Inosoft Trans Sistem'],
            ['id' => 2, 'name' => 'PT.Makmur Jaya Abadi'],
        ];
        return $companies;
    }
}
