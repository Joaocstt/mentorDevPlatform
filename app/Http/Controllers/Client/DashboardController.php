<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;


class DashboardController extends Controller
{
    public function __invoke()
    {
        echo "Dashboard";
    }
}
