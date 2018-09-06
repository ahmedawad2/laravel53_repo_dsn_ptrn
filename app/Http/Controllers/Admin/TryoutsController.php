<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TryoutsController extends Controller
{
    public function acceptJson(Request $request)
    {
        print_r($request->json());
        print_r($request->json('_token'));
    }
}
