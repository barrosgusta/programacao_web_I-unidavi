<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuel extends Model
{
    use HasFactory;

    protected $fillable = [
        'fuelprice',
    ];

    public static $fueltypes = [
        'Gasolina',
        'Etanol',
        'Diesel',
        'GNV'
    ];

    public function getCost(string $tripdistance, string $vehicleconsumption) {
        $cost = ($tripdistance / $vehicleconsumption) * $this->fuelprice;
        return $cost;
    }
}
