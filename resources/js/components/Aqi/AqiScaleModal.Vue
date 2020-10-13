<template>
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
</template>