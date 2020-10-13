@extends('layouts.home')
@section('content_main')


    @if( Auth::check() )
        @if( Auth::user()->id_role==1 )
            <template v-if="menu==0">         
                <air-quality-index-general></air-quality-index-general>
            </template>
            <template v-if="menu==1">         
                <air-quality-index-o3></air-quality-index-o3>
            </template>
            <template v-if="menu==2">         
                <air-quality-index-co></air-quality-index-co>
            </template>
            <template v-if="menu==3">         
                <air-quality-index-so2></air-quality-index-so2>
            </template>
            <template v-if="menu==4">         
                <air-quality-index-no2></air-quality-index-no2>
            </template>
            <template v-if="menu==5">         
                <air-quality-index-pm10></air-quality-index-pm10>
            </template>
            <template v-if="menu==6">         
                <air-quality-index-pm25></air-quality-index-pm25>
            </template>
            <template v-if="menu==7">                    
                <air-pollution-o3-ppm></air-pollution-o3-ppm>
            </template>
            <template v-if="menu==8">      
                <air-pollution-co-ppm></air-pollution-co-ppm>
            </template>
            <template v-if="menu==9">         
                <air-pollution-so2-ppb></air-pollution-so2-ppb>
            </template>
            <template v-if="menu==10">         
                <air-pollution-no2-ppb></air-pollution-no2-ppb>
            </template>
            <template v-if="menu==11">         
                <h1>Contenido del menu 11</h1>
            </template>
            <template v-if="menu==12">         
                <air-pollution-pm10></air-pollution-pm10>
            </template>
            <template v-if="menu==13">         
                <air-pollution-pm25></air-pollution-pm25>
            </template>
            <template v-if="menu==14">         
                <meteorology-temperature></meteorology-temperature>
            </template>
            <template v-if="menu==15">         
                <meteorology-humidity></meteorology-humidity>
            </template>
            <template v-if="menu==16">         
                <meteorology-pressure></meteorology-pressure>
            </template>
            <template v-if="menu==17">         
                <h1>Control de usuarios</h1>
            </template>
            <template v-if="menu==18">         
                <h1>Control de Roles</h1>
            </template>
            <template v-if="menu==18">         
                <h1>Control de Ocuppaciones</h1>
            </template>
            <div v-if="menu==21">  
                @include('linear') 
            </div>
            <template v-if="menu==22">  
                @include('svm')     
            </template>
            <template v-if="menu==23">         
                @include('neuralNetwork') 
            </template>
        @elseif( Auth::user()->id_role==2 )
            <template v-if="menu==17">         
                <h1>Funciones de visitante</h1>
            </template>
            <template v-if="menu==18">         
                <h1>funciones de visitante</h1>
            </template>
        @else

        @endif
    @endif
    

@endsection
