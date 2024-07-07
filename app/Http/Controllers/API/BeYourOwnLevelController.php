<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\BeYourOwnLevel;
use Illuminate\Http\Request;

class BeYourOwnLevelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $BeYourOwnLevel = BeYourOwnLevel::latest()->first();
        return response()->json($BeYourOwnLevel);
    }


}
