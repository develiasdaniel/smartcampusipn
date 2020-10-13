<template>                       
<!-- AQI SCALE card -->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header bg-background-cic">
                <h4 class="text-white">Escala del Índice de la Calidad del Aire</h4>
            </div>
            <div class="card-body">
                <div class="row">

                    <div class="col-sm-4 col-lg-2">
                        <div class="card bg-aqi-good">
                            <div class="card-body">
                                <div class="text-value-lg">0-50</div>
                                <div>BUENO</div>
                                <br><br>
                                <div class="progress progress-white progress-xs my-2">
                                <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" 
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>                                                    
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-2">
                        <div class="card bg-aqi-moderate">
                            <div class="card-body">
                                <div class="text-value-lg">51-100</div>
                                <div>MODERADO</div> 
                                <br><br>                                                       
                                <div class="progress progress-white progress-xs my-2">
                                    <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" 
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-2">
                        <div class="card text-white bg-aqi-unhealthy-sensitive-groups">
                            <div class="card-body">
                                <div class="text-value-lg">101-150</div>
                                <div>NO SALUDABLE PARA GRUPOS SENSIBLES</div>                                                        
                                <div class="progress progress-white progress-xs my-2">
                                    <div class="progress-bar" role="progressbar" style="width: 35%" aria-valuenow="35" 
                                        aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-2">
                        <div class="card text-white bg-aqi-unhealthy">
                            <div class="card-body">
                                <div class="text-value-lg">151-200</div>
                                <div>NO SALUDABLE</div>
                                <br><br>
                                <div class="progress progress-white progress-xs my-2">
                                    <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" 
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>      
                            </div>                                                    
                        </div>
                    </div>

                    <div class="col-sm-4 col-lg-2">
                        <div class="card text-white bg-aqi-very-unhealthy">
                            <div class="card-body">
                                <div class="text-value-lg">201-300</div>
                                <div>MUY NO SALUDABLE</div>
                                <br>
                                <div class="progress progress-white progress-xs my-2">
                                    <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" 
                                    aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="col-sm-4 col-lg-2">
                        <div class="card text-white bg-aqi-hazardous">
                            <div class="card-body">
                                <div class="text-value-lg">301-500</div>
                                <div>PELIGROSO</div>
                                <br><br>                                                                                                          
                                <div class="progress progress-white progress-xs my-2">
                                        <div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" 
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>  
                        </div>
                    </div>
                    
                </div>

                <div class="row justify-content-center">
                    <button class="btn btn-outline-info" data-toggle="modal" data-target="#modalAqi">Ver más</button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END AQI SCALE CARD-->
</template>