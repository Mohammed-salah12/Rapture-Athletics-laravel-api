<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Trending;
use Illuminate\Http\Request;

class TrendingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trendings = Trending::latest()->take(4)->get();
        return response()->json($trendings);
    }

}
