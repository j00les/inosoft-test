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
                'name' => 'USD',
            ],
            [
                'id' => 2,
                'name' => 'AED',
            ],
        ];

        return $currencies;
    }

    function getCompanies() {
        $companies = [
            ['id' => 1, 'name' => 'PT.INOSOFT TRANS SISTEM'],
            ['id' => 2, 'name' => 'PT.MAKMUR JAYA ABADI'],
        ];
        return $companies;
    }
}
