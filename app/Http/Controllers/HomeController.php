<?php

namespace App\Http\Controllers;

use App\Models\Tournament;
use Illuminate\Http\Request;
use Carbon\Carbon;
class HomeController extends Controller
{
    public function index()
    {
        $tournaments = Tournament::where('date','>', Carbon::now())->orderBy('date', 'ASC')->first();
        return view('home')
                ->with('tournaments', $tournaments);
    }
}
