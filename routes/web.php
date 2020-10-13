<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
        return view('welcome');
});

Auth::routes(['verify' => true]);


Route::group(['middleware'=>['auth','verified']],function(){
    
    Route::get('/home', function () {
        return view('content_home/content_main');
    })->name('home');

    Route::group(['middleware'=>['administrator']],function(){
        Route::get('/role','RoleController@index');

        Route::get('/user/showProfile','UserController@showProfile');
        Route::put('/user/updateDataPersonal','UserController@updateInformationPersonal');
        Route::put('/user/updateScholarData','UserController@updateInformationScholar');
        Route::put('/user/updatePasswordData','UserController@updateInformationPassword');

        Route::get('/occupation/selectOccupation','OcuppationController@selectOccupation');
        
        Route::get('/stations','StationController@listStations');

        Route::get('aqi/o3','Aqi\AqiO3Controller@listByHour');
        Route::get('aqi/o3/day','Aqi\AqiO3Controller@listByDay');
        Route::get('aqi/o3/month','Aqi\AqiO3Controller@listByMonth');
        Route::get('aqi/o3/stations','Aqi\AqiO3Controller@listStationsByDay');
        Route::get('aqi/o3/listDayMap','Aqi\AqiO3Controller@listFiveDayByOneStation');

        Route::get('aqi/co','Aqi\AqiCoController@listByHour');
        Route::get('aqi/co/day','Aqi\AqiCoController@listByDay');
        Route::get('aqi/co/month','Aqi\AqiCoController@listByMonth');
        Route::get('aqi/co/stations','Aqi\AqiCoController@listStationsByDay');
        Route::get('aqi/co/listDayMap','Aqi\AqiCoController@listFiveDayByOneStation');

        Route::get('aqi/so2','Aqi\AqiSo2Controller@listByHour');
        Route::get('aqi/so2/day','Aqi\AqiSo2Controller@listByDay');
        Route::get('aqi/so2/month','Aqi\AqiSo2Controller@listByMonth');
        Route::get('aqi/so2/stations','Aqi\AqiSo2Controller@listStationsByDay');
        Route::get('aqi/so2/listDayMap','Aqi\AqiSo2Controller@listFiveDayByOneStation');

        Route::get('aqi/no2','Aqi\AqiNo2Controller@listByHour');
        Route::get('aqi/no2/day','Aqi\AqiNo2Controller@listByDay');
        Route::get('aqi/no2/month','Aqi\AqiNo2Controller@listByMonth');
        Route::get('aqi/no2/stations','Aqi\AqiNo2Controller@listStationsByDay');
        Route::get('aqi/no2/listDayMap','Aqi\AqiNo2Controller@listFiveDayByOneStation');

        Route::get('aqi/pm10','Aqi\AqiPm10Controller@listByHour');
        Route::get('aqi/pm10/day','Aqi\AqiPm10Controller@listByDay');
        Route::get('aqi/pm10/month','Aqi\AqiPm10Controller@listByMonth');
        Route::get('aqi/pm10/stations','Aqi\AqiPm10Controller@listStationsByDay');
        Route::get('aqi/pm10/listDayMap','Aqi\AqiPm10Controller@listFiveDayByOneStation');

        Route::get('aqi/pm25','Aqi\AqiPm25Controller@listByHour');
        Route::get('aqi/pm25/day','Aqi\AqiPm25Controller@listByDay');
        Route::get('aqi/pm25/month','Aqi\AqiPm25Controller@listByMonth');
        Route::get('aqi/pm25/stations','Aqi\AqiPm25Controller@listStationsByDay');
        Route::get('aqi/pm25/listDayMap','Aqi\AqiPm25Controller@listFiveDayByOneStation');
        
        Route::get('aqi/general','Aqi\AqiGeneralController@listByHour');
        Route::get('aqi/general/day','Aqi\AqiGeneralController@listByDay');
        Route::get('aqi/general/month','Aqi\AqiGeneralController@listByMonth');
        Route::get('aqi/general/stations','Aqi\AqiGeneralController@listStationsByDay');
        Route::get('aqi/general/listDayMap','Aqi\AqiGeneralController@listFiveDayByOneStation');

        Route::get('airpollution/co','AirPollution\CoPpmController@listByHour');
        Route::get('airpollution/co/day','AirPollution\CoPpmController@listByDay');
        Route::get('airpollution/co/month','AirPollution\CoPpmController@listByMonth');
        Route::get('airpollution/co/stations','AirPollution\CoPpmController@listStationsByDay');

        Route::get('airpollution/o3','AirPollution\O3PpmController@listByHour');
        Route::get('airpollution/o3/day','AirPollution\O3PpmController@listByDay');
        Route::get('airpollution/o3/month','AirPollution\O3PpmController@listByMonth');
        Route::get('airpollution/o3/stations','AirPollution\O3PpmController@listStationsByDay');

        
        Route::get('airpollution/so2','AirPollution\So2PpbController@listByHour');
        Route::get('airpollution/so2/day','AirPollution\So2PpbController@listByDay');
        Route::get('airpollution/so2/month','AirPollution\So2PpbController@listByMonth');
        Route::get('airpollution/so2/stations','AirPollution\So2PpbController@listStationsByDay');

        
        Route::get('airpollution/no2','AirPollution\No2PpbController@listByHour');
        Route::get('airpollution/no2/day','AirPollution\No2PpbController@listByDay');
        Route::get('airpollution/no2/month','AirPollution\No2PpbController@listByMonth');
        Route::get('airpollution/no2/stations','AirPollution\No2PpbController@listStationsByDay');

        Route::get('airpollution/pm25','AirPollution\Pm25Controller@listByHour');
        Route::get('airpollution/pm25/day','AirPollution\Pm25Controller@listByDay');
        Route::get('airpollution/pm25/month','AirPollution\Pm25Controller@listByMonth');
        Route::get('airpollution/pm25/stations','AirPollution\Pm25Controller@listStationsByDay');

        Route::get('airpollution/pm10','AirPollution\Pm10Controller@listByHour');
        Route::get('airpollution/pm10/day','AirPollution\Pm10Controller@listByDay');
        Route::get('airpollution/pm10/month','AirPollution\Pm10Controller@listByMonth');
        Route::get('airpollution/pm10/stations','AirPollution\Pm10Controller@listStationsByDay');

        Route::get('meteorology/temperature','Meteorology\TemperatureController@listByHour');
        Route::get('meteorology/temperature/day','Meteorology\TemperatureController@listByDay');
        Route::get('meteorology/temperature/month','Meteorology\TemperatureController@listByMonth');
        Route::get('meteorology/temperature/stations','Meteorology\TemperatureController@listStationsByDay');

        Route::get('meteorology/humidity','Meteorology\HumidityController@listByHour');
        Route::get('meteorology/humidity/day','Meteorology\HumidityController@listByDay');
        Route::get('meteorology/humidity/month','Meteorology\HumidityController@listByMonth');
        Route::get('meteorology/humidity/stations','Meteorology\HumidityController@listStationsByDay');
        
        Route::get('meteorology/pressure','Meteorology\PressureController@listByHour');
        Route::get('meteorology/pressure/day','Meteorology\PressureController@listByDay');
        Route::get('meteorology/pressure/month','Meteorology\PressureController@listByMonth');
        Route::get('meteorology/pressure/stations','Meteorology\PressureController@listStationsByDay');
    });

    Route::group(['middleware'=>['visitor']],function(){
    
    });
    
});




