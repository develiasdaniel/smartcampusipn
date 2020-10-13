<?php

namespace App\Http\Controllers\Aqi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AqiPm10Controller extends Controller
{
    public function listByHour(Request $request){

        $startDate = $request->startDate;
        $action = $request->action;

        if($action == 'NEXT'){
            $startDate = date("Y-m-d",strtotime($startDate."+ 1 day"));
        }else if($action == 'PREVIOUS'){
            $startDate = date("Y-m-d",strtotime($startDate."- 1 day"));
        }
        
        $dataByHour = DB::table('historical_aqi as h')
            ->join('station','h.id_station','=','station.id_station')
            ->select(DB::raw('HOUR(h.monitoring_time) as hour'),
                DB::raw('DAY(h.monitoring_date) as day'),
                DB::raw('AVG(h.pm10_aqi) as averange'),
                'h.id_station',
                'h.monitoring_date',
                'station.name')
            ->whereDate('h.monitoring_date',$startDate)
            ->groupBy(DB::raw('HOUR(h.monitoring_time)'),DB::raw('DAY(h.monitoring_date)'),'h.id_station','h.monitoring_date','station.name')
            ->get();
        
        $dataGroupByStation = $dataByHour->groupBy(function($item){
            return $item->name;
        });
                
        foreach ($dataGroupByStation as $key=>$station) {
            $fillArray=$this->arrayInitializeByHour();
            foreach ($station as $data) {
                $fillArray[$data->hour]=$data;
            }           
            $dataGroupByStation[$key]=$fillArray;
        };

        $nameStartDay = $this->getNameStartDay(strtotime($startDate));

        return ['stations'=>$dataGroupByStation,'date'=>$startDate,'nameStartDay' => $nameStartDay];
    }

    public function arrayInitializeByHour(){
        $fillArray=[];
        for ($i = 0; $i <= 23; $i++) {
            $fillArray[$i]=[
                'hour' => $i,
                'day'=> '',
                'averange' => -1,
                'id_station' => '',
                'monitoring_date' => '',
                'name' => '',
            ];
        };

        return $fillArray;
    }

    public function getNameStartDay($date){
            switch (date('w', $date)){
                case 0: return "Domingo"; break;
                case 1: return "Lunes"; break;
                case 2: return "Martes"; break;
                case 3: return "Miercoles"; break;
                case 4: return "Jueves"; break;
                case 5: return "Viernes"; break;
                case 6: return "Sabado"; break;
            }
    }

    public function listByDay(Request $request){
        $startDate = date("Y-m",strtotime($request->startDate));
        $action = $request->action;

        if($action == 'NEXT'){
            $startDate = date("Y-m",strtotime($startDate."+ 1 month"));
        }else if($action == 'PREVIOUS'){
            $startDate = date("Y-m",strtotime($startDate."- 1 month"));
        }
        
        $nameStartMonth = $this->getNameStartMonth($startDate);
        
        $dataByDay = DB::table('historical_aqi as h')
            ->join('station','h.id_station','=','station.id_station')
            ->select(DB::raw('DAY(h.monitoring_date) as day'),
                DB::raw('MONTH(h.monitoring_date) as month'),
                DB::raw('YEAR(h.monitoring_date) as year'),
                DB::raw('AVG(h.pm10_aqi) as averange'),
                'h.id_station',
                'station.name')
            ->whereMonth('h.monitoring_date',date("m",strtotime($startDate)))
            ->whereYear('h.monitoring_date',date("Y",strtotime($startDate)))
            ->groupBy(DB::raw('DAY(h.monitoring_date)'),DB::raw('MONTH(h.monitoring_date)'),DB::raw('YEAR(h.monitoring_date)'),'h.id_station','station.name')
            ->get();
                
        $dataGroupByStation = $dataByDay->groupBy(function($item){
            return $item->name;
        });
        
        foreach ($dataGroupByStation as $key=>$station) {
            $fillArray=$this->arrayInitializeByDay();
            foreach ($station as $data) {
                $fillArray[$data->day-1]=$data;
            }           
            $dataGroupByStation[$key]=$fillArray;
        };

        return ['stations'=>$dataGroupByStation, 'date' => $startDate, 'nameStartMonth' => $nameStartMonth];
    }

    public function arrayInitializeByDay(){
        $fillArray=[];
        for ($i = 0; $i <= 30; $i++) {
            $fillArray[$i]=[
                'day' => $i+1,
                'month'=> '',
                'year' => '',
                'averange' => -1,
                'id_station' => '',
                'name' => '',
            ];
        };

        return $fillArray;
    }

    public function getNameStartMonth($date){
        $month = date("m",strtotime($date));
        switch ($month){
            case 1: return "Enero"; break;
            case 2: return "Febrero"; break;
            case 3: return "Marzo"; break;
            case 4: return "Abril"; break;
            case 5: return "Mayo"; break;
            case 6: return "Junio"; break;
            case 7: return "Julio"; break;
            case 8: return "Agosto"; break;
            case 9: return "Septiembre"; break;
            case 10: return "Octubre"; break;
            case 11: return "Noviembre"; break;
            case 12: return "Diciembre"; break;
        }
    }

    public function listByMonth(Request $request){
        // var $startDate is in format "Y-m"
        $startDate = $request->startDate;
        $action = $request->action;

        if($action == 'NEXT'){
            $startDate = date("Y-m",strtotime($startDate."+ 1 year"));
        }else if($action == 'PREVIOUS'){
            $startDate = date("Y-m",strtotime($startDate."- 1 year"));
        }

        $startDate = date("Y",strtotime($startDate));
        $dataByMonth = DB::table('historical_aqi as h')
            ->join('station','h.id_station','=','station.id_station')
            ->select(DB::raw('MONTH(h.monitoring_date) as month'),
                DB::raw('YEAR(h.monitoring_date) as year'),
                DB::raw('AVG(h.pm10_aqi) as averange'),
                'h.id_station',
                'station.name')
            ->whereYear('h.monitoring_date',$startDate)
            ->groupBy(DB::raw('MONTH(h.monitoring_date)'),DB::raw('YEAR(h.monitoring_date)'),'h.id_station','station.name')
            ->get();
        
        $dataGroupByStation = $dataByMonth->groupBy(function($item){
            return $item->name;
        });
        
        foreach ($dataGroupByStation as $key=>$station) {
            $fillArray=$this->arrayInitializeByMonth();
            foreach ($station as $data) {
                $fillArray[$data->month-1]=$data;
            }           
            $dataGroupByStation[$key]=$fillArray;
        };

        return ['stations'=>$dataGroupByStation, 'date' => $startDate];
    }
    
    public function arrayInitializeByMonth(){
        $fillArray=[];
        for ($i = 0; $i <= 11; $i++) {
            $fillArray[$i]=[
                'month' => $i+1,
                'year' => '',
                'averange' => -1,
                'id_station' => '',
                'name' => '',
            ];
        };

        return $fillArray;
    }

    public function listStationsByDay(Request $request){
        $startDate = $request->startDate;
        $station = $request->station;

        $nameStartDay = $this->getNameStartDay(strtotime($startDate));

        if( $station !== 'ALL'){
            $dataByDay = DB::table('historical_aqi as h')
            ->join('station','h.id_station','=','station.id_station')
            ->select(DB::raw('DAY(h.monitoring_date) as day'),
                DB::raw('MONTH(h.monitoring_date) as month'),
                DB::raw('YEAR(h.monitoring_date) as year'),
                DB::raw('AVG(h.pm10_aqi) as averange'),
                'h.monitoring_date',
                'h.id_station',
                'station.name',
                'station.latitud as latitude',
                'station.longitud as longitude')
            ->whereDate('h.monitoring_date',$startDate)
            ->where('h.id_station',$station)
            ->groupBy(DB::raw('DAY(h.monitoring_date)'),DB::raw('MONTH(h.monitoring_date)'),DB::raw('YEAR(h.monitoring_date)'),'h.id_station','station.name',
                'h.monitoring_date', 'station.latitud','station.longitud')
            ->get();
        }else {
            $dataByDay = DB::table('historical_aqi as h')
            ->join('station','h.id_station','=','station.id_station')
            ->select(DB::raw('DAY(h.monitoring_date) as day'),
                DB::raw('MONTH(h.monitoring_date) as month'),
                DB::raw('YEAR(h.monitoring_date) as year'),
                DB::raw('AVG(h.pm10_aqi) as averange'),
                'h.monitoring_date',
                'h.id_station',
                'station.name',
                'station.latitud as latitude',
                'station.longitud as longitude')
            ->whereDate('h.monitoring_date',$startDate)
            ->groupBy(DB::raw('DAY(h.monitoring_date)'),DB::raw('MONTH(h.monitoring_date)'),DB::raw('YEAR(h.monitoring_date)'),'h.id_station','station.name',
            'h.monitoring_date', 'station.latitud','station.longitud')
            ->get();
        }
        
        return ['stations'=>$dataByDay, 'date' => $startDate, 'nameStartDay' => $nameStartDay, 'station' => $station];
    }

    public function listFiveDayByOneStation(Request $request){
            $startDate = $request->startDate;
            $endDate = date("Y-m-d",strtotime($startDate."+ 5 day"));
            $station = $request->station;
            
            if( $station !== 'ALL'){
                $dataByFiveDays = DB::table('historical_aqi as h')
                ->join('station','h.id_station','=','station.id_station')
                ->select(DB::raw('DAY(h.monitoring_date) as day'),
                    DB::raw('MONTH(h.monitoring_date) as month'),
                    DB::raw('YEAR(h.monitoring_date) as year'),
                    DB::raw('AVG(h.pm10_aqi) as averange'),
                    'h.id_station',
                    'station.name',
                    'h.monitoring_date')
                ->whereBetween('h.monitoring_date',[$startDate,$endDate])
                ->where('station.id_station',$station)
                ->groupBy(DB::raw('DAY(h.monitoring_time)'),DB::raw('MONTH(h.monitoring_date)'),'h.id_station','h.monitoring_date','station.name')
                ->get();
            }else{
                $dataByFiveDays = DB::table('historical_aqi as h')
                ->join('station','h.id_station','=','station.id_station')
                ->select(DB::raw('DAY(h.monitoring_date) as day'),
                    DB::raw('MONTH(h.monitoring_date) as month'),
                    DB::raw('YEAR(h.monitoring_date) as year'),
                    DB::raw('AVG(h.pm10_aqi) as averange'),
                    'h.id_station',
                    'station.name',
                    'h.monitoring_date')
                ->whereDate('h.monitoring_date',$startDate)
                ->groupBy(DB::raw('DAY(h.monitoring_time)'),DB::raw('MONTH(h.monitoring_date)'),'h.id_station','h.monitoring_date','station.name')
                ->get();
            }
           
            
            return ['dataByFiveDays'=>$dataByFiveDays];
    
    }
}
