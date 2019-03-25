<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Webhook extends Controller
{
    public function init(Request $request) {
        $request = $request;
        return 'hello2';
    }
}
