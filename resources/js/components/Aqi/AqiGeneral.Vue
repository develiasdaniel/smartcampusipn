<template>
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <link href="css/coreui-chartjs.css" rel="stylesheet">

                    <div class="fade-in">
                       
                        <!-- AQI SCALE CARD -->
                        <air-quality-index-card></air-quality-index-card>
                        <!-- END AQI SCALE CARD-->

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-background-cic">
                                        <h4 class="text-white">Histórico de Datos del Índice de la Calidad del Aire de forma General</h4>
                                    </div>
                                    <div class="card-body justify-content-between">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-warning">
                                                            <small class="text-muted">Estación: </small>
                                                            <div class="text-value-lg">Todas las estaciones</div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-danger">
                                                            <small class="text-muted">Fecha de inicio</small>
                                                            <br>
                                                            <template v-if="period=='HOUR'">
                                                                <input class="form-control form-control-sm" id="date-input" type="date" 
                                                                    name="date-input" placeholder="date" :min="minDate" :max="maxDate" v-model="initialDate">
                                                                <button class="btn btn-sm btn-outline-danger" type="button" @click="listTableData(initialDate, period)">Ok</button>                                                        
                                                            </template>
                                                            <template v-if="period=='DAYLI'">
                                                                <input class="form-control form-control-sm" id="date-input" type="month" 
                                                                    name="date-input" placeholder="date" :min="minMonth" :max="maxMonth" v-model="initialMonth">
                                                                <button class="btn btn-sm btn-outline-danger" type="button" @click="listTableData(initialMonth, period)">Ok</button>                                                        
                                                            </template>
                                                            <template v-if="period=='MONTH'">
                                                                <select class="form-control form-control-sm" v-model="initialYear">
                                                                    <option disabled value="">Seleccione un año</option>
                                                                    <option v-for="year in rangeOfYears(minYear, maxYear)" v-text="year"></option>
                                                                </select>
                                                                <button class="btn btn-sm btn-outline-danger" type="button" @click="listTableData(initialYear, period)">Ok</button>                                                                               
                                                            </template>
                                                        </div>
                                                    </div>

                                                </div>

                                                <hr class="mt-0">
                                            </div>

                                            <div class="col-sm-6">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="c-callout c-callout-success">
                                                            <label class="col-form-label" for="">Seleccionar el periodo en que desea ver los datos</label>    
                                                            <div class="form-group">
                                                                <button class="btn mr-3" :class="period=='MONTH' ? 'btn-success' : 'btn-light'" type="button" 
                                                                    @click="listTableData(currentYear,'MONTH')" title="Mostrar el promedio de cada mes en un año">&nbsp; Mensual &nbsp;
                                                                </button>
                                                                <button class="btn mr-3" :class="period=='DAYLI' ? 'btn-success' : 'btn-light'" type="button" 
                                                                    @click="listTableData(currentMonth,'DAYLI')" title="Mostrar el promedio de cada dia de un mes">&nbsp;&nbsp; Diario &nbsp;
                                                                </button>
                                                                <button class="btn mr-3" :class="period=='HOUR' ? 'btn-success' : 'btn-light'" type="button" 
                                                                    @click="listTableData(currentDate,'HOUR')" title="Mostrar el promedio de cada hora de un día">&nbsp;&nbsp; Hora &nbsp;&nbsp;
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <hr class="mt-0">
                                                
                                            </div>

                                        </div>
                                    </div>
                                    
                                    <div class="card-body">
                                        <ul class="nav nav-tabs" id="myTab1" role="tablist">
                                            <li class="nav-item"><a id="nav-link-historical-data" class="nav-link active" data-toggle="tab" href="#tables" role="tab"
                                                    aria-controls="home" aria-selected="false">Tablas</a></li>
                                            <li class="nav-item"><a id="nav-link-historical-data" class="nav-link" data-toggle="tab" href="#charts" role="tab"
                                                    aria-controls="profile" aria-selected="true">Gráficas</a></li>
                                        </ul>
                                        <div class="tab-content" id="myTab1Content">
                                            <div class="tab-pane fade active show" id="tables" role="tabpanel" aria-labelledby="home-tab">  
                                                <div class="d-flex justify-content-between bg-secondary text-center px-3">
                                                    <div>
                                                        <br>
                                                        <h4 class="card-title mb-0 ">Zona Zacatenco</h4>
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <h4 v-if="period=='HOUR'">Visualizando por Hora</h4>                                                
                                                        <h4 v-else-if="period=='DAYLI'">Visualizando por Día</h4>                                                                                          
                                                        <h4 v-else-if="period=='MONTH'">Visualizando por Mes</h4>
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <template v-if="period == 'HOUR'">
                                                                    <li class="page-item" :class="currentDate==minDate ? 'disabled' : ''"><a @click="listTableData(currentDate,period,'PREVIOUS')" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                            class="sr-only">Previous</span></a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="" v-text="nameCurrentDate + ' ,' + currentDate"></a>
                                                                    </li>
                                                                    <li class="page-item" :class="currentDate==maxDate ? 'disabled' : ''"><a @click="listTableData(currentDate,period,'NEXT')" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                            class="sr-only">Next</span></a>
                                                                    </li>
                                                                </template>                                                        
                                                                <template v-if="period == 'DAYLI'">
                                                                    <li class="page-item" :class="currentMonth==minMonth ? 'disabled' : ''"><a @click="listTableData(currentMonth,period,'PREVIOUS')" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                            class="sr-only">Previous</span></a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="" v-text="nameCurrentMonth + ' ('+ currentMonth + ')'"></a>
                                                                    </li>  
                                                                    <li class="page-item" :class="currentMonth==maxMonth ? 'disabled' : ''"><a @click="listTableData(currentMonth,period,'NEXT')" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                            class="sr-only">Next</span></a>
                                                                    </li>                                                  
                                                                </template>
                                                                <template v-if="period == 'MONTH'">
                                                                    <li class="page-item" :class="currentYear==minYear ? 'disabled' : ''"><a @click="listTableData(currentYear,period,'PREVIOUS')" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                            class="sr-only">Previous</span></a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="" v-text="currentYear"></a>
                                                                    </li>  
                                                                    <li class="page-item" :class="currentYear==maxYear ? 'disabled' : ''"><a @click="listTableData(currentYear,period,'NEXT')" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                            class="sr-only">Next</span></a>
                                                                    </li>                                                  
                                                                </template>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>    
                                                
                                                <div>                                    
                                                    <table class="table table-responsive table-responsive-sm table-separate table-outline mb-0">                                                
                                                        <tbody class="table-secondary align-items-center">
                                                            <template v-if="period=='HOUR'">
                                                                <template v-if="arrayStations.length == 0">
                                                                    <div class="content-center">                                                                            
                                                                        <h3 class="">No Hay datos de esta fecha</h3> 
                                                                    </div>                                                                                                                                                                     
                                                                </template>
                                                                <template v-else>
                                                                    <tr v-for="(items,key) in arrayStations">
                                                                        <td class="text-center">
                                                                            <div><strong v-text="key"></strong></div>
                                                                        </td>
                                                                        <td v-for="item in items" class="text-center">
                                                                            <div v-if="item.averange != -1">                                                              
                                                                                <span class="badge-table mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                    :class="calculatedClassAqi(Math.round(item.averange))">&nbsp;{{Math.round(item.averange)}}&nbsp;</span>
                                                                            </div>  
                                                                            <div v-else>
                                                                                <span class="badge-table badge-light mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                :class="">&nbsp;&nbsp;{{'?'}} &nbsp;</span> 
                                                                            </div>                           
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <div><strong>Hora</strong></div>
                                                                        </td>  
                                                                        <td v-for="index in 24" class="text-center">
                                                                                <span class="badge-table badge-dark text-white mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                        :class="">&nbsp;{{index-1}}&nbsp;&nbsp;</span>                                                                                               
                                                                        </td>
                                                                    </tr>
                                                                </template>
                                                            </template>
                                                            <template v-if="period=='DAYLI'">
                                                                <template v-if="arrayStations.length == 0">
                                                                    <div class="content-center">                                                                            
                                                                        <h3 class="">No Hay datos de esta fecha</h3> 
                                                                    </div>                                                                                                                                                                     
                                                                </template>
                                                                <template v-else>
                                                                    <tr v-for="(items,key) in arrayStations">
                                                                        <td class="text-center">
                                                                            <div><strong v-text="key"></strong></div>
                                                                        </td>
                                                                        <td v-for="item in items" class="text-center">
                                                                            <div v-if="item.averange != -1">                                                              
                                                                                <span class="badge-table mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                    :class="calculatedClassAqi(Math.round(item.averange))">&nbsp;{{Math.round(item.averange)}}&nbsp;</span>
                                                                            </div>  
                                                                            <div v-else>
                                                                                <span class="badge-table badge-light mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                :class="">&nbsp;&nbsp;{{'?'}} &nbsp;</span> 
                                                                            </div>                           
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <div><strong>Dia</strong></div>
                                                                        </td>  
                                                                        <td v-for="index in 31" class="text-center">
                                                                                <span class="badge-table badge-dark text-white mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                        :class="">&nbsp;{{index}}&nbsp;&nbsp;</span>                                                                                               
                                                                        </td>
                                                                    </tr>
                                                                </template>
                                                            </template>                                                    
                                                            <template v-if="period=='MONTH'">
                                                                <template v-if="arrayStations.length == 0">
                                                                    <div class="content-center">                                                                            
                                                                        <h3 class="">No Hay datos de esta fecha</h3> 
                                                                    </div>                                                                                                                                                                     
                                                                </template>
                                                                <template v-else>
                                                                    <tr v-for="(items,key) in arrayStations">
                                                                        <td class="text-center">
                                                                            <div><strong v-text="key"></strong></div>
                                                                        </td>
                                                                        <td v-for="item in items" class="text-center">
                                                                            <div v-if="item.averange != -1">                                                              
                                                                                <span class="badge-table mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                    :class="calculatedClassAqi(Math.round(item.averange))">&nbsp;{{Math.round(item.averange)}}&nbsp;</span>
                                                                            </div>  
                                                                            <div v-else>
                                                                                <span class="badge-table badge-light mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                :class="">&nbsp;&nbsp;{{'?'}} &nbsp;</span> 
                                                                            </div>                           
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="text-center">
                                                                            <div><strong>Mes</strong></div>
                                                                        </td>  
                                                                        <td v-for="month in arrayMonths " class="text-center">
                                                                                <span class="badge-table badge-dark text-white mfs-auto px-2" style="width: 50%; height: 80%;" 
                                                                                        :class="">&nbsp;{{month}}&nbsp;&nbsp;</span>                                                                                               
                                                                        </td>
                                                                    </tr>
                                                                </template>
                                                            </template>
                                                        </tbody>
                                                    </table>        
                                                </div>
                                            </div>                                            
                                            <div class="tab-pane fade" id="charts" role="tabpanel" aria-labelledby="profile-tab">
                                                <div class="d-flex justify-content-between bg-secondary text-center px-3">
                                                    <div>
                                                        <br>
                                                        <h4 class="card-title mb-0 ">Zona Zacatenco</h4>
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <h4 v-if="period=='HOUR'">Visualizando por Hora</h4>                                                
                                                        <h4 v-else-if="period=='DAYLI'">Visualizando por Día</h4>                                                                                          
                                                        <h4 v-else-if="period=='MONTH'">Visualizando por Mes</h4>
                                                    </div>
                                                    <div>
                                                        <br>
                                                        <nav aria-label="Page navigation example">
                                                            <ul class="pagination">
                                                                <template v-if="period == 'HOUR'">
                                                                    <li class="page-item" :class="currentDate==minDate ? 'disabled' : ''"><a @click="listTableData(currentDate,period,'PREVIOUS')" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                            class="sr-only">Previous</span></a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="" v-text="nameCurrentDate + ' ,' + currentDate"></a>
                                                                    </li>
                                                                    <li class="page-item" :class="currentDate==maxDate ? 'disabled' : ''"><a @click="listTableData(currentDate,period,'NEXT')" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                            class="sr-only">Next</span></a>
                                                                    </li>
                                                                </template>                                                        
                                                                <template v-if="period == 'DAYLI'">
                                                                    <li class="page-item" :class="currentMonth==minMonth ? 'disabled' : ''"><a @click="listTableData(currentMonth,period,'PREVIOUS')" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                            class="sr-only">Previous</span></a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="" v-text="nameCurrentMonth + ' ('+ currentMonth + ')'"></a>
                                                                    </li>  
                                                                    <li class="page-item" :class="currentMonth==maxMonth ? 'disabled' : ''"><a @click="listTableData(currentMonth,period,'NEXT')" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                            class="sr-only">Next</span></a>
                                                                    </li>                                                  
                                                                </template>
                                                                <template v-if="period == 'MONTH'">
                                                                    <li class="page-item" :class="currentYear==minYear ? 'disabled' : ''"><a @click="listTableData(currentYear,period,'PREVIOUS')" class="page-link" href="#" aria-label="Previous"><span aria-hidden="true">«</span><span
                                                                            class="sr-only">Previous</span></a>
                                                                    </li>
                                                                    <li class="page-item disabled">
                                                                        <a class="page-link" href="" v-text="currentYear"></a>
                                                                    </li>  
                                                                    <li class="page-item" :class="currentYear==maxYear ? 'disabled' : ''"><a @click="listTableData(currentYear,period,'NEXT')" class="page-link" href="#" aria-label="Next"><span aria-hidden="true">»</span><span
                                                                            class="sr-only">Next</span></a>
                                                                    </li>                                                  
                                                                </template>
                                                            </ul>
                                                        </nav>
                                                    </div>
                                                </div>                                                                                         
                                                <div class="c-chart-wrapper">
                                                    <div class="ct-chart">
                                                        <canvas id="chartHour" class="chart chart-size chartjs-render-monitor" style="display: block;">

                                                        </canvas>
                                                    </div>
                                                </div> 
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>                       
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Índice de la Calidad del Aire (AQI)</h5>
                                    </div>
                                    <div class="card-body">
                                        <h6>¿Qué es el AQI?</h6>
                                        <p>El AQI es un índice para informar la calidad diaria del aire, le indica qué tan limpio o insalubre es su
                                          aire y qué efectos asociados a la salud podrían ser una preocupación. El AQI se centra en los efectos 
                                          sobre la salud que puede experimentar en unas pocas horas o días después de respirar aire no saludable.</p>
                                        <ul>
                                            <li>El AQI se calcula para cuatro contaminantes atmosféricos principales regulados por la Ley de Aire Limpio:
                                             ozono a nivel del suelo, contaminación por partículas, monóxido de carbono y dióxido de azufre
                                            </li>
                                            <li> Para cada uno de estos contaminantes, la EPA(Environmental Protection Agency) y la WHO (World Health Organization) 
                                                ha establecido estándares de calidad del aire para proteger la salud pública.
                                            </li>
                                        </ul>
                                        <h6>¿Por qué es importante la calidad del aire?</h6>
                                        <p>La calidad del aire local afecta la forma en que vives y respiras. Al igual que el clima, puede cambiar
                                             de un día a otro o incluso de una hora a otra.
                                        </p>
                                        <p>La información sobre la calidad del aire debe ser tan fácil de encontrar y comprender como los pronósticos
                                             del tiempo. Se utiliza el AQI para proporcionar información simple sobre la calidad del aire local,
                                              cómo el aire no saludable puede afectarlo y cómo puede proteger su salud.
                                        </p>
                                        <h6>¿Cómo puedo evitar estar expuesto a aire no saludable?</h6>
                                        <p>Puede tomar medidas simples para reducir su exposición al aire no saludable. Primero, debe averiguar 
                                            si los niveles de AQI son preocupantes en su área.
                                        </p>
                                        <ul>
                                            <li>
                                                <strong>Esfuerzo prolongado:</strong> Esto significa cualquier actividad al aire libre que realice 
                                                de forma intermitente durante varias horas y que le haga respirar un poco más fuerte de lo normal. 
                                                Un buen ejemplo de esto es trabajar en el patio durante parte de un día. Cuando la calidad del aire
                                                 no es saludable, puede proteger su salud al reducir la cantidad de tiempo que dedica a este tipo de 
                                                 actividad.
                                            </li>
                                            <li>
                                                <strong>Gran esfuerzo:</strong> Esto significa actividades intensas al aire libre que te hacen respirar fuerte.
                                                 Cuando la calidad del aire no es saludable, puede proteger su salud reduciendo la cantidad de tiempo que
                                                  dedica a este tipo de actividad o sustituyendo una actividad menos intensa; por ejemplo, salga a caminar 
                                                  en lugar de correr. Asegúrese de reducir su nivel de actividad si experimenta tos inusual, molestias en
                                                   el pecho, sibilancias, dificultad para respirar o fatiga inusual. 
                                            </li> 
                                        </ul>
                                        <h6>Referencias</h6>
                                        <a href="https://www3.epa.gov/airnow/aqi_brochure_02_14.pdf">https://www3.epa.gov/airnow/aqi_brochure_02_14.pdf</a>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Mapa de ubicación de la estación -->     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-primary-cic">
                                        <h5>Mapa de Ubicación de estaciones</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-warning">
                                                            <small class="text-muted">Estacion </small>
                                                            <div class="text-value-lg" v-text="nameStation == 'ALL' ? 'Todas las estaciones': nameStationSelected(nameStation)"></div>
                                                        </div>
                                                    </div>

                                                    <div class="col-6">
                                                        <div class="c-callout c-callout-success">
                                                            <small class="text-muted">Día registrado</small>
                                                            <div class="text-value-lg" v-text="currentDateMap+' '+ nameDateMap"></div>
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
                                                                    <i class="cil-info"></i>
                                                                </div>
                                                            </a>
                                                        </li> 
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link" data-toggle="tab"
                                                                href="#timeline2" role="tab" aria-selected="false" title="Filtros para ver estaciones">
                                                                <div class="c-icon">
                                                                    <i class="cil-filter"></i>
                                                                </div>
                                                            </a>
                                                        </li>                                                
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link" data-toggle="tab"
                                                                href="#settings2" role="tab" aria-selected="false" title="Ver escala AQI">
                                                                <div class="c-icon">
                                                                    <i class="cil-globe-alt"></i>
                                                                </div>
                                                            </a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a id="nav-link-map" class="nav-link" data-toggle="tab"
                                                                href="#messages2" role="tab" aria-selected="false" title="Ver 5 días a partir de la fecha">
                                                                <div class="c-icon">
                                                                    <i class="cil-list-rich"></i>
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
                                                                    <div class="c-icon float-right text-danger"><i class="cil-filter"></i>
                                                                    </div>
                                                                    <div><strong>Filtros</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Se puede filtrar para ver el AQI en un día y estación en específico.
                                                                    </small>
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right text-info"><i class="cil-globe-alt"></i>
                                                                    </div>
                                                                    <div><strong>Escala AQI</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Se puede ver la escala AQI conforme a sus colores.
                                                                    </small>
                                                                </div>                                                        
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right text-danger"><i class="cil-location-pin"></i>
                                                                    </div>
                                                                    <div><strong>Marker</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Click en algun marker para ver información de la estación.
                                                                    </small>
                                                                </div>                                                                                                                
                                                                <div class="list-group-item list-group-item-accent-warning
                                                                    list-group-item-divider">
                                                                    <div class="c-icon float-right"><i class="cil-circle"></i>
                                                                    </div>
                                                                    <div><strong>Circulo</strong></div>
                                                                    <small class="text-muted mr-3">
                                                                        Area (rango) de monitoreo de cada estación coloreada en la escala AQI.
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
                                                                    <input class="form-control form-control-sm" id="date-input" type="date" 
                                                                        name="date-input" placeholder="date"  :min="minDate" :max="maxDate" v-model="currentDateMap" @change="loadStationsMap(currentDateMap)">
                                                                </div>
                                                                <div class="list-group-item list-group-item-accent-info 
                                                                        list-group-item-divider">
                                                                    <small class="text-muted">Filtra por estación</small>
                                                                    <br>
                                                                    <div class="text-value">
                                                                        <select class="form-control form-control-sm" v-model="nameStation" @change="loadStationsMap(currentDateMap, nameStation)">
                                                                            <option :value="'ALL'">Todas las estaciones</option>
                                                                            <option v-for="(station,index) in listStations" :key="index" 
                                                                                :value="station.id_station" v-text="station.name" :title="station.description"></option>
                                                                        </select>
                                                                    </div>
                                                                </div>                                                                
                                                                <div class="list-group-item list-group-item-accent-info">
                                                                    <div class="text-value text-danger" v-if="arrayStationsMap.length==0">
                                                                        <h5 v-text="'No hay datos para esa fecha o esa estación'"></h5>   
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
                                                                <h6>Estacion: <strong v-text="nameStation=='ALL' ? 'Todas las estaciones' : nameStationSelected(nameStation)"></strong></h6>
                                                                <template v-if="nameStation == 'ALL'">                                                                                                                                          
                                                                    <div class="list-group-item list-group-item-accent-danger">
                                                                        <div class="justify-contente-center">
                                                                            <strong class="text-danger">Seleccione una estación en especifíco y vea su historial</strong> 
                                                                        </div>
                                                                    </div>
                                                                </template>
                                                                <template v-else>                                                                    
                                                                    <div class="list-group-item list-group-item-accent-dark
                                                                        list-group-item-divider" v-for="(date, index) in listFiveDaystation" :key="index">
                                                                        <div class="c-icon float-right">                                                                
                                                                            <span class="badge" :class="calculatedClassAqi(Math.round(date.averange))">&nbsp;&nbsp;{{Math.round(date.averange)}} &nbsp;</span>
                                                                        </div>
                                                                        <div class="justify-contente-center">
                                                                            <small class="text-muted mr-3"><div class="c-icon"><i class="cil-calendar"></i></div>
                                                                            &nbsp; {{date.monitoring_date}}</small>
                                                                            <strong>{{calculatedStringLevelAqi(Math.round(date.averange))}}</strong> 
                                                                        </div>
                                                                    </div>
                                                                </template>
                                                            </div>                                                    
                                                            <hr>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-9 col-md-9 col-sm-9">                                
                                                <div class="row content-center">                              
                                                    <div id="mapAQI" style="width: 100%; height: 420px">            
                                                    </div>  
                                                </div>
                                            </div>

                                        </div>                         

                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

        <!---Modal AQI -->
        <air-quality-index-modal></air-quality-index-modal>
        <!-- End Modal AQI -->


    </main>
</template>



<script>
    export default {
      data() {
        return {
          period : '',
          initialDate: '',
          minDate: '',
          maxDate:'',
          arrayStations : [],
          currentDate: '',
          nameCurrentDate: '',
          initialMonth : '',
          minMonth : '',
          maxMonth : '',
          currentMonth : '',
          nameCurrentMonth : '',         
          initialYear : '',
          minYear : '',
          maxYear : '',
          currentYear : '',
          arrayMonths : [],
          map : null,
          arrayStationsMap: [],
          dateMap : '',
          nameDateMap : '',
          currentDateMap : '',
          nameStation : '',
          idStation : '',
          arrayMarkerStation: [],
          arrayCircleStation: [],
          listStations : [],
          listFiveDaystation:[],  
          varChart:null,
          chart:null,
          config:null,
        }
      },
      methods: {
        loadMap(){
            this.map = L.map('mapAQI').setView([19.499066, -99.13448], 15);

            L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoiZWxpYXNkYW5pZWwiLCJhIjoiY2thZnN3am9nMDJhNDJwbzd0eXpjMjUycSJ9.yvt4Go5ETWF_jBSX9U2ZMw', {
                maxZoom: 18,
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1
                }).addTo(this.map);

            this.loadStationsMap(this.initialDate)
            this.loadListStationsMap()
        },
        loadListStationsMap(){
            let me=this
            let url= '/stations'
            axios.get(url).then(function (response) {
                    let data = response.data
                    me.listStations = data.stations
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        nameStationSelected(idStation){
            let nameStation=''
            this.listStations.map( function(station){
                if(station.id_station == idStation){
                    nameStation = station.name
                }
            })
            return nameStation
        },
        listFiveDayByOneStation(startDate, station='ALL'){
            let me=this
            let url= '/aqi/general/listDayMap?startDate='+startDate+'&station='+station
            axios.get(url).then(function (response) {
                    let data = response.data
                    me.listFiveDaystation = data.dataByFiveDays
                })
                .catch(function (error) {
                    console.log(error);
                })  
        },        
        loadStationsMap(day, station = 'ALL'){ 
            let me=this
            me.listFiveDayByOneStation(day, station)
            let url= '/aqi/general/stations?station='+station+'&startDate='+day
            axios.get(url).then(function (response) {
                    me.arrayMarkerStation.map( function(markerStation){
                        me.map.removeLayer(markerStation)
                    })
                    me.arrayCircleStation.map( function(circleStation){
                        me.map.removeLayer(circleStation)
                    })
                    me.arrayMarkerStation = []
                    me.arrayCircleStation = []

                    let data = response.data
                    me.arrayStationsMap = data.stations
                    me.currentDateMap= data.date
                    me.nameDateMap = data.nameStartDay  
                    me.nameStation = data.station      
                    me.arrayStationsMap.map(function(station, index) { 
                        me.arrayMarkerStation[index] = L.marker([station.latitude, station.longitude]).addTo(me.map)
                        
                        me.arrayCircleStation[index] = L.circle([station.latitude, station.longitude], {
                            color: me.calculatedColorAqi(Math.round(station.averange)),
                            fillColor: me.calculatedColorAqi(Math.round(station.averange)),
                            fillOpacity: 0.4,
                            radius: 190
                        }).addTo(me.map);
                        me.arrayMarkerStation[index].bindPopup(`<b>Estación: ${station.name}</b>
                            <br>Dia monitoreado: ${station.monitoring_date}
                            <br>Valor AQI:<span class="${me.calculatedClassAqi(Math.round(station.averange))}">&nbsp;${Math.round(station.averange)}&nbsp;</span>`).openPopup();
                    })

                })
                .catch(function (error) {
                    console.log(error);
                })  
        },
        loadInitialValues(){
            let dateNow = new Date()
            let month = (dateNow.getMonth()+1<10) ? '0'+ (dateNow.getMonth()+1) : dateNow.getMonth()
            let day = (dateNow.getDate()<10) ? '0' + (dateNow.getDate()) : dateNow.getDate()
            
            this.minDate = '2019-09-17'
            this.maxDate = `${dateNow.getFullYear()}-${month}-${day}`
            this.initialDate = this.minDate
            
            this.minMonth = '2019-09'
            this.maxMonth = `${dateNow.getFullYear()}-${month}`
            this.initialMonth = this.minMonth
            this.currentMonth = this.minMonth

            this.minYear = '2019'
            this.maxYear = dateNow.getFullYear()
            this.arrayMonths = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 
                'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre']
            this.initialYear = this.minYear
            this.currentYear = this.minYear
     
        },
        listTableData(startDate, tipeView, action = 'CURRENT'){
            this.period=tipeView
            if(this.period=='HOUR'){
                this.listByHourData(startDate, action)
            }else if(this.period=='DAYLI'){
                this.listByDayData(startDate, action)
            }else if(this.period=='MONTH'){
                this.listByMonthData(startDate, action)
            }

        },
        listByHourData(startDate, action){
            let me=this
            let url= '/aqi/general?startDate='+startDate+'&action='+action;
            axios.get(url).then(function (response) {
                    let data = response.data
                    me.arrayStations = data.stations
                    me.currentDate= data.date
                    me.nameCurrentDate = data.nameStartDay
                    me.loadChartData('HOUR')
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        listByDayData(startDate, action){
            let me = this
            let url= '/aqi/general/day?startDate='+startDate+'&action='+action;
            axios.get(url).then(function (response) {
                    let data = response.data
                    me.arrayStations = data.stations
                    me.currentMonth = data.date
                    me.nameCurrentMonth = data.nameStartMonth
                    me.loadChartData('DAY')
                })
                .catch(function (error) {
                    console.log(error);
                });

        },
        listByMonthData( startDate, action){
            let me = this
            let url = '/aqi/general/month?startDate='+startDate+'-01&action='+action
            axios.get(url).then(function (response) {
                    let data = response.data
                    me.arrayStations = data.stations
                    me.currentYear = data.date
                    me.loadChartData('MONTH')
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        calculatedClassAqi(value){
            let levelAqi = ''
            if(value >= 0 && value <= 50){
                levelAqi = 'bg-aqi-good'
            }else if(value >= 51 && value <= 100){
                levelAqi = 'bg-aqi-moderate'
            }else if(value >= 101 && value <= 150){
                levelAqi = 'bg-aqi-unhealthy-sensitive-groups'
            }else if(value >= 151 && value <= 200){
                levelAqi = 'bg-aqi-unhealthy'
            }else if(value >= 201 && value <= 300){
                levelAqi = 'bg-aqi-very-unhealthy'
            }else if(value >= 301 && value <= 500){
                levelAqi = 'bg-aqi-hazardous'
            }else{
                levelAqi = 'badge-light'
            }

            return levelAqi
        },
        rangeOfYears(start, end) {
            let years = [];
            for (let i = start; i <= end; i++) {
                years.push(i);
            }
            return years;
        },
        calculatedColorAqi(value){
            let colorLevelAqi=''
            if(value >= 0 && value <= 50){
                colorLevelAqi = '#00E400'
            }else if(value >= 51 && value <= 100){
                colorLevelAqi = '#ffde33'
            }else if(value >= 101 && value <= 150){
                colorLevelAqi = '#E17E00'
            }else if(value >= 151 && value <= 200){
                colorLevelAqi = '#FF0000'
            }else if(value >= 201 && value <= 300){
                colorLevelAqi = '#8F3F97'
            }else if(value >= 301 && value <= 500){
                colorLevelAqi = '#7E0023'
            }
            return colorLevelAqi
        },        
        calculatedStringLevelAqi(value){
            let levelAqi=''
            if(value >= 0 && value <= 50){
                levelAqi = 'Bueno'
            }else if(value >= 51 && value <= 100){
                levelAqi = 'Moderado'
            }else if(value >= 101 && value <= 150){
                levelAqi = 'No saludable para grupos sensibles'
            }else if(value >= 151 && value <= 200){
                levelAqi = 'No saludable'
            }else if(value >= 201 && value <= 300){
                levelAqi = 'Muy No saludable'
            }else if(value >= 301 && value <= 500){
                levelAqi = 'Peligroso'
            }
            return levelAqi
        }, 
        loadChartValues(){
            let me = this
            me.config = {
                type: 'line',
                data : {
                    labels : [],
                    datasets : []
                },                
                options: {
                    responsive: true,
                    title: {
                        display: true,
                        text: 'Gráfica'
                    },
                    tooltips: {
                        mode: 'index',
                        intersect: false,
                    },
                    hover: {
                        mode: 'nearest',
                        intersect: true
                    },
                    scales: {
                        xAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'h'
                            }
                        }],
                        yAxes: [{
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: 'VALOR'
                            }
                        }]
                    }
                }
            } 
            me.varChart = document.getElementById('chartHour').getContext('2d')
            me.chart = new Chart(me.varChart, me.config)
        },
        loadChartData(view){
            let me = this
            console.log("loadchartByHour():")
            if(view == 'HOUR'){                
                me.config.data.labels = me.fillArrayChartLabels(0, 23) 
                me.config.options.scales.xAxes[0].scaleLabel.labelString = 'HORA'
            }else if(view == 'DAY'){                
                me.config.data.labels = me.fillArrayChartLabels(1, 31) 
                me.config.options.scales.xAxes[0].scaleLabel.labelString = 'DIA'
            }else if(view == 'MONTH'){
                me.config.data.labels = me.arrayMonths 
                me.config.options.scales.xAxes[0].scaleLabel.labelString = 'MES'
            }
            me.config.data.datasets.splice(0)
            for (let property in me.arrayStations) { 
                let colorName = me.colorHEX()
                let newColor = me.colorHEX()
                let newDataset = {
                    label : property,
                    fill : false,
                    borderColor : newColor,
                    backgroundColor : newColor,
                    data: []
                }
                me.arrayStations[property].map(function(data){
                    if(data.averange == -1){
                        newDataset.data.push('')
                    }else{                        
                        newDataset.data.push(Math.round(data.averange))
                    }
                })
                me.config.data.datasets.push(newDataset)
            }

            me.chart.update()
            
        },
        fillArrayChartLabels(since, until){
            let fillArray = []
            for(let index=since; index <= until;index++){
                fillArray.push(index)
            }

            return fillArray;
        },
        generateLetter(){
            var letras = ["a","b","c","d","e","f","0","1","2","3","4","5","6","7","8","9"]
            var numero = (Math.random()*15).toFixed(0)
            return letras[numero]
        },            
        colorHEX(){
            let me = this
            let color = ""
            for(var i=0;i<6;i++){
                color = color + me.generateLetter() 
            }
            return "#" + color
        }
      },
      mounted() {
          this.loadInitialValues(),this.listTableData(this.initialDate,'HOUR'), this.loadMap(), this.loadChartValues()
      }
    }
</script>   