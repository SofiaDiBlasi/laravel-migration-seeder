<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Trains;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        $Trains =  Trains::all();
        return view ('welcome' , compact('Trains'));
    }
}
