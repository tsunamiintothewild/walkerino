<?php

namespace App\Http\Controllers;

use App\Models\Walk;
use DateTime;
use Illuminate\Http\Request;

class WalkController extends Controller
{
    public function store(Request $request) {
        Walk::create([
            "distance" => $request->distance,
            "date" => new DateTime($request->date)
        ]);

        return redirect()->back();
    }
}
