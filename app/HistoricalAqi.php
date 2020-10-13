<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HistoricalAqi extends Model
{
    protected $table = 'historical_aqi';

    protected $fillable = [
        'id_station','monitoring_date','monitoring_time','o3_aqi','co_aqi','so2_aqi','no2_aqi','pm25_aqi',
        'pm10_aqi','value_aqi','level_aqi'
    ];
}
