<?php

namespace App\Http\Controllers;

use App\Models\Walk;
use DateTime;
use Illuminate\Http\Request;

class WalkController extends Controller
{
    public function index(Request $request) {
        $walks = Walk::all()->sortBy('date');
        return view('index', [
            'walks' => $walks,
            'total' => $walks->sum('distance')
        ]);
    }

    public function store(Request $request) {
        Walk::create([
            "distance" => $request->distance,
            "date" => new DateTime($request->date)
        ]);

        return redirect()->back();
    }
}
