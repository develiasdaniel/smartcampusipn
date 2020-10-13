<template>
    <main class="c-main">
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <div class="fade-in">
                       
                                     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-primary-cic">
                                        <h5>Regresión Lineal</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="c-callout c-callout-warning">
                                                    <small class="text-muted"></small>
                                                    <div class="text-value-lg">Mostrando el conjunto de datos</div>
                                                
                                        </div>
                                        <table class="table table-responsive table-responsive-sm table-striped">
                                            <thead>
                                                <tr style="text-align: right;">
                                                <th></th>
                                                <th>ID</th>
                                                <th>FECHA</th>
                                                <th>HORA</th>
                                                <th>IDESTACION</th>
                                                <th>CO_PPM</th>
                                                <th>O3_PPM</th>
                                                <th>SO2_PPB</th>
                                                <th>NO2_PPB</th>
                                                <th>PM25</th>
                                                <th>PM10</th>
                                                <th>TEM</th>
                                                <th>HUM</th>
                                                <th>PRE</th>
                                                <th>O_AQI</th>
                                                <th>CO_AQI</th>
                                                <th>SO_AQI</th>
                                                <th>NO_AQI</th>
                                                <th>PM25_AQI</th>
                                                <th>PM10_AQI</th>
                                                <th>AQI</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>0</td>
                                                <td>1</td>
                                                <td>2019-09-17</td>
                                                <td>20</td>
                                                <td>EMCA_T</td>
                                                <td>0.0</td>
                                                <td>0.033</td>
                                                <td>47</td>
                                                <td>31</td>
                                                <td>2.5</td>
                                                <td>2</td>
                                                <td>17.1840</td>
                                                <td>49.2780</td>
                                                <td>78083.496000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>65</td>
                                                <td>30</td>
                                                <td>10</td>
                                                <td>2</td>
                                                <td>66</td>
                                                </tr>
                                                <tr>
                                                <td>1</td>
                                                <td>2</td>
                                                <td>2019-09-17</td>
                                                <td>21</td>
                                                <td>EMCA_T</td>
                                                <td>0.0</td>
                                                <td>0.020</td>
                                                <td>61</td>
                                                <td>22</td>
                                                <td>3.7</td>
                                                <td>3</td>
                                                <td>17.1530</td>
                                                <td>50.4885</td>
                                                <td>78143.461000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>82</td>
                                                <td>21</td>
                                                <td>16</td>
                                                <td>4</td>
                                                <td>82</td>
                                                </tr>
                                                <tr>
                                                <td>2</td>
                                                <td>3</td>
                                                <td>2019-09-17</td>
                                                <td>22</td>
                                                <td>EMCA_T</td>
                                                <td>0.0</td>
                                                <td>0.003</td>
                                                <td>59</td>
                                                <td>9</td>
                                                <td>5.9</td>
                                                <td>5</td>
                                                <td>17.4260</td>
                                                <td>51.9665</td>
                                                <td>78178.755000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>80</td>
                                                <td>9</td>
                                                <td>25</td>
                                                <td>5</td>
                                                <td>80</td>
                                                </tr>
                                                <tr>
                                                <td>3</td>
                                                <td>4</td>
                                                <td>2019-09-17</td>
                                                <td>23</td>
                                                <td>EMCA_T</td>
                                                <td>0.0</td>
                                                <td>0.001</td>
                                                <td>54</td>
                                                <td>4</td>
                                                <td>5.5</td>
                                                <td>5</td>
                                                <td>17.3830</td>
                                                <td>53.2775</td>
                                                <td>78204.133000</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>74</td>
                                                <td>4</td>
                                                <td>23</td>
                                                <td>5</td>
                                                <td>74</td>
                                                </tr>
                                                <tr>
                                                <td>4</td>
                                                <td>5</td>
                                                <td>2019-09-18</td>
                                                <td>0</td>
                                                <td>EMCA_T</td>
                                                <td>0.0</td>
                                                <td>0.000</td>
                                                <td>53</td>
                                                <td>2</td>
                                                <td>3.2</td>
                                                <td>2</td>
                                                <td>17.5337</td>
                                                <td>54.0132</td>
                                                <td>78221.557895</td>
                                                <td>0</td>
                                                <td>0</td>
                                                <td>72</td>
                                                <td>2</td>
                                                <td>13</td>
                                                <td>3</td>
                                                <td>72</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="c-callout c-callout-warning">
                                                    <small class="text-muted"></small>
                                                    <div class="text-value-lg">Describiendo el conjunto de datos (muestra atributos como 
                                                        media, varianza, desviación estandar de cada uno de los atributos
                                                         del dataset
                                                    </div>                                                
                                        </div>
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
                        

                    </div>
                </div>
            </div>
        </div>

    </main>
</template>

<script>
    export default {
        data() {
        },  
        mounted() {

        }
    }
</script>   