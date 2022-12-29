<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $movies = Movie::orderBy('featured', 'desc')
        ->orderBy('created_at', 'desc')
        ->get();
        
        return view('member.dashboard', ['movies' => $movies]);
    }
}
