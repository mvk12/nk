<?php

namespace App\Http\Controllers\Web\Zoho;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestOAuthController extends Controller
{
    public function index(Request $request)
    {
        \Log::info(__FILE__);
        \Log::info('Request Data'.PHP_EOL.json_encode($request->all(), JSON_PRETTY_PRINT));
        \Log::info('Server Data'.PHP_EOL.json_encode($_SERVER, JSON_PRETTY_PRINT));

        return $request->all();
    }
}
