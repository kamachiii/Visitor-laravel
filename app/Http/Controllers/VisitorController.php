<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index(Request $request)
    {
        $device = $request->visitor()->device();
        $platform = $request->visitor()->platform();
        $ip = $request->visitor()->ip();
        $browser = $request->visitor()->browser();
        $languages = $request->visitor()->languages();
        $userAgent = $request->visitor()->userAgent();

        return view('visitor')->with([
            'device' => $device,
            'browser' => $browser,
            'ip' => $ip,
            'platform' => $platform,
            'language' => $languages,
            'userAgent' => $userAgent
        ]);
    }
}
