<?php

namespace App\Http\Controllers;

use App\Models\Fuel;
use Illuminate\Http\Request;

class FuelController extends Controller
{
    public function index()
    {
        $fuel = new Fuel();

        $fueltypes = $fuel::$fueltypes;
        
        return view('home', compact('fueltypes'));
    }

    public function costCalculate()
    { 
        $fuel = new Fuel();
        $fuel->fuelprice = request('fuelprice');
        $cost = $fuel->getCost(request('tripdistance'), request('vehicleconsumption'));
        
        return view('cost', compact('cost'));
    }
}
