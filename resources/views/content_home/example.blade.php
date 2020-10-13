    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <link href="css/coreui-chartjs.css" rel="stylesheet">

                    <div class="fade-in">
                       
                        <!-- AQI SCALE -->
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
                        <!-- END AQI SCALE -->

                        <div class="row justify-content-center">
                            <div class="col-sm-6 col-lg-3">
                                <div class="card text-white bg-gradient-primary">
                                    <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                        <div>
                                            <div class="text-value-lg">Ozono (03)</div>
                                            <div>Historico</div>
                                        </div>
                                        <div class="btn-group">
                                            <button class="btn btn-transparent dropdown-toggle p-0" type="button" disabled aria-haspopup="true" aria-expanded="false">
                                                <div class="c-icon">
                                                    <i class="cil-settings"></i>
                                                </div>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <canvas class="chart chartjs-render-monitor" id="card-chart1" height="70" style="display: block; width: 204px; height: 70px;" width="204">
                                        </canvas>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6 col-lg-3">
                                <div class="card">
                                    <div class="card-body card-body pb-0 d-flex justify-content-center align-items-start">
                                        <div>
                                            <figure>
                                                <img class="img-contaminants img-fluid rounded" src="/img/contaminants/ozone.png" alt="user@email.com">
                                            </figure>                                            
                                        </div>
                                    </div>                                    
                                    <div class="small text-muted">Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a>    
                                    </div>
                                </div>
                            </div> 

                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-background-cic">
                                        <h4 class="text-white">Histórico de Datos Ozono</h4>
                                    </div>
                                    <div class="card-body justify-content-between">
                                        <div class="row">

                                            <div class="col-sm-3 col-lg-3">                                                
                                                <div class="form-group">
                                                    <label for="exampleFormControlSelect1">Filtrar por estación</label>
                                                    <select class="form-control" id="exampleFormControlSelect1">
                                                        <option>1</option>
                                                        <option>2</option>
                                                        <option>3</option>
                                                        <option>4</option>
                                                        <option>5</option>
                                                    </select>
                                                </div>                          
                                            </div>

                                            <div class="col-sm-3 col-lg-3">
                                                <div class="form-group">
                                                    <label class="col-form-label" for="date-input">Fecha de Inicio</label>
                                                    <div class="">
                                                        <input class="form-control" id="date-input" type="date"
                                                            name="date-input" placeholder="date">
                                                            <span class="help-block">Please
                                                            enter a valid date</span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-sm-6 col-lg-6">
                                                <label class="col-form-label" for="">Seleccionar periodo</label>    
                                                <div class="form-group">
                                                    <button class="btn btn-light mr-3" type="submit">Mensual</button>
                                                    <button class="btn btn-light mr-3" type="button">Semanal</button>
                                                    <button class="btn btn-light mr-3" type="button">Diario</button>
                                                    <button class="btn btn-success active" type="button">Hora</button>
                                                </div>
                                                <!--
                                                <div class="form-group">
                                                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                                        <label class="btn btn-outline-secondary">
                                                            <input id="option1" type="radio" name="options" autocomplete="off"> Day
                                                        </label>
                                                        <label class="btn btn-outline-secondary active">
                                                            <input id="option2" type="radio" name="options" autocomplete="off" checked=""> Month
                                                        </label>
                                                        <label class="btn btn-outline-secondary">
                                                            <input id="option3" type="radio" name="options" autocomplete="off"> Year
                                                        </label>
                                                    </div>
                                                </div>
                                                -->                          
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between bg-secondary text-center px-3">
                                            <div>
                                                <br>
                                                <h4 class="card-title mb-0 ">Zona Zacatenco</h4>
                                            </div>
                                            <div>
                                                <br>
                                                <h4 class="">Ver por Hora</h4>
                                            </div>
                                            <div>
                                                <br>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                    class="sr-only">Previous</span></a></li>
                                                        <li class="page-item disabled"><a class="page-link" href="#">Mayo 2020</a></li>
                                                        <li class="page-item"><a class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                    class="sr-only">Next</span></a></li>
                                                    </ul>
                                                </nav>
                                            </div>
                                        </div>    
                                        
                                        <div>                                    
                                            <table class="table table-responsive table-responsive-sm table-separate table-outline mb-0">                                                
                                                <tbody class="table-secondary align-items-center">
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="">ESIME</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2" style="width:50%; height: 80%">12</span>   
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="">ESIME</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2" style="width:50%; height: 80%">12</span>   
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="">ESIME</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2" style="width:50%; height: 80%">12</span>   
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-success mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                    </tr>
                                                    <tr>
                                                        <td class="text-center">
                                                            <div class="">ESIME</div>
                                                        </td>
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2" style="width:50%; height: 80%">12</span>   
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                           
                                                        <td class="text-center">
                                                            <span class="badge-table badge-secondary mfs-auto px-2"  style="width:50%; height: 80%">12</span>                                               
                                                        </td>                                            
                                                    </tr>
                                                </tbody>
                                            </table>        
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>                       
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Ozono (O3)</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>¿Qué es el ozono?</h6>
                                        <p>El ozono es un gas que se encuentra en el 
                                            aire que respiramos. El ozono puede ser bueno o malo, dependiendo de dónde ocurra:</p>
                                        <ul>
                                            <li>
                                            <strong>El buen ozono </strong> está presente naturalmente en la atmósfera superior de la Tierra, aproximadamente de 6 
                                            a 30 millas sobre la superficie de la Tierra. Este ozono natural nos protege de los dañinos rayos ultravioleta del sol.
                                            </li>
                                            <li>
                                                Se forma <strong>mal ozono</strong> cerca del suelo cuando los contaminantes (emitidos por fuentes como
                                                 automóviles, plantas de energía, calderas industriales, refinerías y plantas químicas) reaccionan químicamente
                                                  a la luz solar. La contaminación por ozono es más probable que se forme durante los meses más cálido
                                            </li>
                                        </ul>
                                        <h6>¿Cuáles son los efectos sobre la salud?</h6>
                                        <p>
                                            El ozono afecta los pulmones y el sistema respiratorio en muchas formas, puede:
                                        </p>
                                        <ul>
                                            <li>
                                                <strong>Irrita el sistema respiratorio: </strong> Causando tos, dolor de garganta, irritación de las vías respiratorias,
                                                 opresión en el pecho o dolor en el pecho al respirar profundamente.
                                            </li>
                                            <li>
                                                <strong>Reduce la función pulmonar:</strong>  Haciendo que sea más difícil respirar tan profunda y vigorosamente 
                                                como lo haría normalmente, especialmente cuando hace ejercicio.
                                            </li>
                                            <li>
                                                <strong>Inflama y daña las células que recubren los pulmones:</strong>  Los estudios sugieren que si este tipo de inflamación aparece repetidamente, 
                                                el tejido pulmonar puede cicatrizar permanentemente y la función pulmonar puede reducirse permanentemente.
                                            </li>
                                            <li>
                                                <strong>Hace que los pulmones sean más susceptibles a la infección:</strong>  El ozono reduce las defensas de los pulmones al dañar las células
                                                 que mueven las partículas y las bacterias fuera de las vías respiratorias y al reducir el número y 
                                                 la efectividad de los glóbulos blancos en los pulmones.
                                            </li>
                                            <li>
                                                <strong>Agrava el asma:</strong>   El ozono hace que las personas sean más sensibles a los alérgenos, los desencadenantes más comunes de los ataques de asma. Además, los asmátic
                                                pueden verse más gravemente afectados por la función pulmonar reducida y la inflamación de las vías respiratorias. 
                                            </li>
                                        </ul>
                                        <h6>Referencias</h6>
                                        <a href="https://www3.epa.gov/airnow/aqi_brochure_02_14.pdf">https://www3.epa.gov/airnow/aqi_brochure_02_14.pdf</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mapa de ubicación de la estación           
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-primary-cic">
                                        <h5>Mapa de Ubicación de estaciones</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-info">
                                                            <small class="text-muted">Filtra por estación</small>
                                                            <br>
                                                            <div class="text-value">
                                                                <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                    <option>4</option>
                                                                    <option>5</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-danger">
                                                            <small class="text-muted">Filtre por fecha</small>
                                                            <br>
                                                            <input class="form-control form-control-sm" id="date-input" type="date" name="date-input" placeholder="date">
                                                            <span class="help-block">Please enter a valid date</span>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr class="mt-0">
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-warning">
                                                            <small class="text-muted">Estacion </small>
                                                            <div class="text-value-lg">todas las Estaciones</div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-success">
                                                            <small class="text-muted">Dia registrado</small>
                                                            <div class="text-value-lg">15/11/2019</div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <hr class="mt-0">
                                                
                                            </div>

                                        </div>
                                        <br>

                                        <div class="row">

                                            <div class="col-lg-3 col-md-3 col-sm-3">
                                                <div class="">
                                                    <ul class="nav nav-tabs nav-tabs-secondary nav-underline nav-underline-success" role="tablist">
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link active " data-toggle="tab"
                                                                href="#tab-info-map" role="tab" aria-selected="true" title="Información relevante">
                                                                <div class="c-icon ">
                                                                    <i class="cil-list"></i>
                                                                </div>
                                                            </a>
                                                        </li> 
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link" data-toggle="tab"
                                                                href="#timeline2" role="tab" aria-selected="false" title="Filtros para ver estaciones">
                                                                <div class="c-icon ">
                                                                    <i class="cil-list"></i>
                                                                </div>
                                                            </a>
                                                        </li>                                                
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link" data-toggle="tab"
                                                                href="#settings2" role="tab" aria-selected="false" title="Ver escala AQI">
                                                                <div class="c-icon">
                                                                    <i class="cil-settings"></i>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link" data-toggle="tab"
                                                                href="#messages2" role="tab" aria-selected="false">
                                                                <div class="c-icon">
                                                                    <i class="cil-speech"></i>
                                                                </div>
                                                            </a>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content responsive">
                                                        <div class="tab-pane active" id="tab-info-map" role="tabpanel">
                                                            <div class="list-group list-group-accent">                                                        
                                                                <div class="list-group-item list-group-item-accent-secondary
                                                                    bg-light text-center font-weight-bold text-muted c-small">
                                                                    Información al usar el mapa
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right"><i class="cil-calendar"></i>
                                                                    </div>
                                                                    <div><strong>Filtros</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Se puede filtrar para ver el AQI en un día y estación en específico.
                                                                    </small>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right"><i class="cil-calendar"></i>
                                                                    </div>
                                                                    <div><strong>Escala AQI</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Se puede ver la escala AQI conforme a sus colores.
                                                                    </small>
                                                                </div>                                                        
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right"><i class="cil-calendar"></i>
                                                                    </div>
                                                                    <div><strong>Marker</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Click en algun marker para ver información de la estación.
                                                                    </small>
                                                                </div>                                                                                                                
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right"><i class="cil-calendar"></i>
                                                                    </div>
                                                                    <div><strong>Circulo</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Area (rango) de monitoreo de cada estación.
                                                                    </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane" id="timeline2" role="tabpanel">
                                                            <div class="list-group list-group-accent">
                                                                <div class="list-group-item list-group-item-accent-secondary
                                                                    bg-light text-center font-weight-bold text-muted c-small">Opciones
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <small class="text-muted">Filtre por fecha</small>
                                                                    <br>
                                                                    <input class="form-control form-control-sm" id="date-input" type="date" name="date-input" placeholder="date">
                                                                    <span class="help-block">Please enter a valid date</span>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-info">
                                                                    <small class="text-muted">Filtra por estación</small>
                                                                    <br>
                                                                    <div class="text-value">
                                                                        <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                                                            <option>Todas las estaciones</option>
                                                                            <option>2</option>
                                                                            <option>3</option>
                                                                            <option>4</option>
                                                                            <option>5</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-secondary
                                                                    bg-light text-center font-weight-bold text-muted
                                                                    text-uppercase c-small">Tomorrow
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-danger
                                                                    list-group-item-divider">
                                                                    <div>New UI Project - <strong>deadline</strong></div><small
                                                                        class="text-muted mr-3">
                                                                        <div class="c-icon">
                                                                            <i class="cil-calendar"></i>
                                                                        </div>
                                                                        &nbsp; 10 - 11pm</small><small class="text-muted">
                                                                        <div class="c-icon">
                                                                            <i class="cil-home"></i>
                                                                        </div>
                                                                        &nbsp; creativeLabs HQ</small>
                                                                    <div class="c-avatars-stack mt-2">
                                                                        <div class="c-avatar c-avatar-xs"><img
                                                                                class="c-avatar-img"
                                                                                src="assets/img/avatars/2.jpg"
                                                                                alt="user@email.com"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-success
                                                                    list-group-item-divider">
                                                                    <div><strong>#10 Startups.Garden</strong> Meetup</div><small
                                                                        class="text-muted mr-3">
                                                                        <div class="c-icon">
                                                                            <i class="cil-calendar"></i>
                                                                        </div>
                                                                        &nbsp; 1 - 3pm</small><small class="text-muted">
                                                                        <div class="c-icon">
                                                                            <i class="cil-home"></i>
                                                                        </div>
                                                                        &nbsp; Palo Alto, CA</small>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-primary
                                                                    list-group-item-divider">
                                                                    <div><strong>Team meeting</strong>
                                                                    </div>
                                                                    <small
                                                                        class="text-muted mr-3">
                                                                        <div class="c-icon">
                                                                            <i class="cil-calendar"></i>
                                                                        </div>
                                                                        &nbsp; 4 - 6pm</small><small class="text-muted">
                                                                        <div class="c-icon">
                                                                            <i class="cil-home"></i>
                                                                        </div>
                                                                        &nbsp; creativeLabs HQ
                                                                    </small>
                                                                    <div class="c-avatars-stack mt-2">
                                                                        <div class="c-avatar c-avatar-xs"><img
                                                                                class="c-avatar-img"
                                                                                src="assets/img/avatars/2.jpg"
                                                                                alt="user@email.com"></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>                                                
                                                        <div class="tab-pane" id="settings2" role="tabpanel">                                                                                                    
                                                            <div class="list-group list-group-accent">
                                                                <div class="list-group-item list-group-item-accent-secondary
                                                                    bg-light text-center font-weight-bold text-muted c-small ">
                                                                    <h6>Escala AQI</h6>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex">                                                                                                                          
                                                                        <span class="badge bg-aqi-good">&nbsp;&nbsp; &nbsp;</span>&nbsp;&nbsp; 
                                                                        <h6>Bueno (0-50)</h6> 
                                                                    </div>                                                           
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex">
                                                                        <span class="badge bg-aqi-moderate">&nbsp;&nbsp; &nbsp;</span> &nbsp;&nbsp;                                                                
                                                                        <h6>Moderato (51-100)</h6> 
                                                                    </div>                                                           
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex">                                                                
                                                                        <span class="badge bg-aqi-unhealthy-sensitive-groups">&nbsp;&nbsp; &nbsp;</span> &nbsp;&nbsp;    
                                                                        <h6>No saludable para grupos sensibles (101-150)</h6>                                                              
                                                                    </div>                                                           
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex">
                                                                        <span class="badge bg-aqi-unhealthy">&nbsp;&nbsp; &nbsp;</span> &nbsp;&nbsp;                                                                
                                                                        <h6>No saludable (151-200)</h6> 
                                                                    </div>                                                           
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex">   
                                                                        <span class="badge bg-aqi-very-unhealthy">&nbsp;&nbsp; &nbsp;</span>&nbsp;&nbsp;                                                              
                                                                        <h6>Muy no saludable (201-300)</h6> 
                                                                    </div>                                                           
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex">                                                                                                                            
                                                                        <span class="badge bg-aqi-hazardous">&nbsp;&nbsp; &nbsp;</span> &nbsp;&nbsp; 
                                                                        <h6>Peligroso (300-500)</h6>
                                                                    </div>                                                           
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="d-flex justify-content-center">
                                                                        <button class="btn btn-outline-info" data-toggle="modal" data-target="#modalAqi">Ver más</button>
                                                                    </div>                                                           
                                                                </div>
                                                                
                                                            </div>                                                   
                                                        </div>
                                                        <div class="tab-pane" id="messages2" role="tabpanel">                                                    
                                                            <div class="list-group list-group-accent">                                                        
                                                                <div class="list-group-item list-group-item-accent-secondary
                                                                    bg-light text-center font-weight-bold text-muted c-small">
                                                                    Datos a partir de la fecha seleccionada
                                                                </div>
                                                                <h6>Estacion: <strong>ESIME</strong></h6>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right">                                                                
                                                                        <span class="badge bg-aqi-good">&nbsp;&nbsp; &nbsp;</span>
                                                                    </div>
                                                                    <div class="justify-contente-center">
                                                                        <small class="text-muted mr-3"><div class="c-icon"><i class="cil-calendar"></i></div>
                                                                        &nbsp; 11/11/19</small>
                                                                        <strong>Bueno</strong> 
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right">                                                                
                                                                        <span class="badge bg-aqi-good">&nbsp;&nbsp; &nbsp;</span>
                                                                    </div>
                                                                    <div class="justify-contente-center">
                                                                        <small class="text-muted mr-3"><div class="c-icon"><i class="cil-calendar"></i></div>
                                                                        &nbsp; 12/11/19</small>
                                                                        <strong>Bueno</strong> 
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right">                                                                
                                                                        <span class="badge bg-aqi-hazardous">&nbsp;&nbsp; &nbsp;</span>
                                                                    </div>
                                                                    <div class="justify-contente-center">
                                                                        <small class="text-muted mr-3"><div class="c-icon"><i class="cil-calendar"></i></div>
                                                                        &nbsp; 13/11/19</small>
                                                                        <strong>Peligroso</strong> 
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right">                                                                
                                                                        <span class="badge bg-aqi-moderate">&nbsp;&nbsp; &nbsp;</span>
                                                                    </div>
                                                                    <div class="justify-contente-center">
                                                                        <small class="text-muted mr-3"><div class="c-icon"><i class="cil-calendar"></i></div>
                                                                        &nbsp; 14/11/19</small>
                                                                        <strong>Moderado</strong> 
                                                                    </div>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-dark
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right">                                                                
                                                                        <span class="badge bg-aqi-good">&nbsp;&nbsp; &nbsp;</span>
                                                                    </div>
                                                                    <div class="justify-contente-center">
                                                                        <small class="text-muted mr-3"><div class="c-icon"><i class="cil-calendar"></i></div>
                                                                        &nbsp; 15/11/19</small>
                                                                        <strong>Bueno</strong> 
                                                                    </div>
                                                                </div>
                                                            </div>                                                    
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-9">                                
                                                <div class="row content-center">                              
                                                    <div id="mapid15" style="width: 100%; height: 400px">            
                                                    </div>  
                                                </div>
                                            </div>

                                        </div>                              



                                    </div>
                                </div>
                            </div>
                        </div>
                        -->

                    </div>
                </div>
            </div>
        </div>

        <!---Modal AQI -->
        <div class="modal fade" id="modalAqi" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header bg-primary-cic">
                    <h5 class="modal-title text-white" id="exampleModalScrollableTitle">Escala del Índice de la calidad del Aire (AQI)</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div>
                        <h6>¿Que es el Índice de la Calidad del aire</h6>
                        <p>El AQI es una herramienta que simplifica la notificación de la calidad del aire al público
                            en general. El AQI incorpora en un índice único de concentración de 5 contaminantes 
                            criterios: ozono (O3), partículas (PM), monóxido de carbono (CO), dióxido de azufre
                            (SO_2) y dióxido de nitrógeno ( NO_2), la escala del índice se divide en categorías 
                            generales que están asociadas con la salud de la población.</p>
                        <p>¿Por qué se debe informar el AQI?
                                <ul>
                                    <li>Es simple de crear y entender.</li>
                                    <li>Transmite las implicaciones para la salud de la calidad del aire.</li>
                                    <li>Promueve el uso uniforme en todo el país.</li>
                                </ul>                                                     
                        </p>
                        <h6>¿Qué significan los valores AQI?</h6>
                        <p>
                            El propósito del AQI es ayudarlo a comprender qué significa la calidad del aire local para su salud. 
                            Para que sea más fácil de entender, el AQI se divide en seis niveles de preocupación por la salud.
                        </p>
                    </div>
                    <div>
                        <table class="table table-responsive-sm">
                            <thead class="">
                                <tr>
                                    <th>Valor Númerico</th>
                                    <th>Niveles de preocupación de salud</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="bg-aqi-good">
                                    <td>0 - 50</td>
                                    <td>Bueno</td>
                                    <td>La calidad del aire es satisfactoria y presenta poco o ningún riesgo para la salud.</td>
                                </tr>
                                <tr class="bg-aqi-moderate">
                                    <td>51 - 100</td>
                                    <td>Moderado</td>
                                    <td>La calidad del aire es aceptable; sin embargo, la contaminación en este rango puede representar 
                                        un problema de salud moderado para un número muy pequeño de personas. Las personas que son inusualmente 
                                        sensibles al ozono o la contaminación por partículas pueden experimentar síntomas respiratorios.</td>
                                </tr>
                                <tr class="bg-aqi-unhealthy-sensitive-groups">
                                    <td>101 - 150</td>
                                    <td>No saludable para grupos sensibles</td>
                                    <td>los miembros de grupos sensibles pueden experimentar efectos sobre la salud, pero es poco probable
                                         que el público en general se vea afectado.
                                         <ul>
                                             <li>Ozono: personas con enfermedad pulmonar, niños, adultos mayores,
                                            y las personas que realizan actividades al aire libre se consideran sensibles y, por lo tanto, tienen un mayor riesgo.</li>
                                            <li>Contaminación de partículas: personas con enfermedades cardíacas o pulmonares,
                                            los adultos mayores y los niños se consideran sensibles y
                                            por lo tanto en mayor riesgo</li> 
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="bg-aqi-unhealthy">
                                    <td>151 - 200</td>
                                    <td>No saludable</td>
                                    <td>Todos pueden comenzar a experimentar efectos en la salud cuando los valores de AQI están entre 151 y 200. Los miembros de 
                                        grupos sensibles pueden experimentar efectos en la salud más graves.</td>
                                </tr>
                                <tr class="bg-aqi-very-unhealthy">
                                    <td>201 - 300</td>
                                    <td>Muy no saludable</td>
                                    <td>Los valores de AQI entre 201 y 300 desencadenan una alerta de salud, lo que 
                                        significa que todos pueden experimentar efectos de salud más graves.</td>
                                </tr>
                                <tr class="bg-aqi-hazardous">
                                    <td>301 - 500</td>
                                    <td>Peligroso</td>
                                    <td>Los valores de AQI superiores a 300 activan advertencias sanitarias de condiciones de emergencia. Toda la población
                                         tiene aún más probabilidades de verse afectada por graves efectos sobre la salud..</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div>
                        <small class="text-muted">Nota: Los valores superiores a 500 se consideran "más allá del AQI". Siga las recomendaciones para la categoría de "peligroso".</small>
                    </div>
                    <div>
                        <h6>¿Cómo se calcula el AQI en el Smart Campus?</h6>
                        <p>Cada día, el Smart Campus monitorea concentraciones de los principales contaminantes 
                            en las ubicaciones dentro de todo el IPN, estas medidas sin procesar se convierten en un valor AQI separando cada
                            valor para cada contaminante (ozono, contaminación por partículas, monóxido de carbono y dióxido de azufre) usando el estándar
                            desarrollada por la <a href="url">EPA</a>, el más alto de estos valores AQI se informa
                            como el valor AQI final.</p>

                        <p>Los valores de AQI pueden variar de una temporada a otra. En invierno, el monóxido de carbono puede ser alto en algunas áreas porque el clima
                             frío dificulta el funcionamiento eficaz del sistema de control de emisiones de automóviles. 
                             El ozono suele ser mayor en los meses más cálidos, porque el calor y la luz solar aumentan la formación d
                             e ozono. La contaminación por partículas se puede elevar en cualquier época del año.</p>
                        <h5>Referencias </h5>
                        <a href="https://www3.epa.gov/airnow/aqi_brochure_02_14.pdf">
                            https://www3.epa.gov/airnow/aqi_brochure_02_14.pdf</a><br>
                        <a href="https://www.epa.gov/">https://www.epa.gov/</a>
                    </div>                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>                    
                </div>
                </div>
            </div>
        </div>
        <!-- End Modal AQI -->


    </main>