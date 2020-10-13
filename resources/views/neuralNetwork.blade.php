<main class="c-main">
        <div class="container-fluid">
            <div id="ui-view">
                <div>
                    <div class="fade-in">
                       
                                     
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header bg-primary-cic">
                                        <h5>Red Neuronal utilizando Keras</h5>
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
                                            <div class="text-value-lg">Describiendo el conjunto de datos: mostrando valores de 
                                                media, varianza, desviación estandar de cada uno de los atributos
                                                    del dataset
                                            </div>                                                
                                        </div>
                                        <table class="table table-responsive table-responsive-sm table-striped">
                                            <thead>
                                                <tr style="text-align: right;">
                                                <th></th>
                                                <th>ID</th>
                                                <th>HORA</th>
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
                                                <td>count</td>
                                                <td>6764.00000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                <td>6764.000000</td>
                                                </tr>
                                                <tr>
                                                <td>mean</td>
                                                <td>3739.00000</td>
                                                <td>11.513601</td>
                                                <td>0.002602</td>
                                                <td>0.011030</td>
                                                <td>45.540213</td>
                                                <td>0.809284</td>
                                                <td>6.253519</td>
                                                <td>5.531047</td>
                                                <td>21.329786</td>
                                                <td>42.804619</td>
                                                <td>78104.243692</td>
                                                <td>0.090479</td>
                                                <td>0.121821</td>
                                                <td>59.402425</td>
                                                <td>0.748078</td>
                                                <td>23.702839</td>
                                                <td>5.630692</td>
                                                <td>64.598462</td>
                                                </tr>
                                                <tr>
                                                <td>std</td>
                                                <td>2268.51875</td>
                                                <td>6.918269</td>
                                                <td>0.016105</td>
                                                <td>0.018792</td>
                                                <td>26.570188</td>
                                                <td>3.453842</td>
                                                <td>7.198252</td>
                                                <td>7.194192</td>
                                                <td>9.230719</td>
                                                <td>13.258975</td>
                                                <td>211.316599</td>
                                                <td>0.295019</td>
                                                <td>1.562897</td>
                                                <td>31.234956</td>
                                                <td>3.049950</td>
                                                <td>22.559409</td>
                                                <td>6.618292</td>
                                                <td>28.226187</td>
                                                </tr>
                                                <tr>
                                                <td>min</td>
                                                <td>1.00000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>3.861580</td>
                                                <td>10.756800</td>
                                                <td>77514.586000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>1.000000</td>
                                                </tr>
                                                <tr>
                                                <td>25%</td>
                                                <td>1691.75000</td>
                                                <td>6.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>24.000000</td>
                                                <td>0.000000</td>
                                                <td>1.800000</td>
                                                <td>1.000000</td>
                                                <td>14.053500</td>
                                                <td>33.274200</td>
                                                <td>77957.854500</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>34.000000</td>
                                                <td>0.000000</td>
                                                <td>8.000000</td>
                                                <td>2.000000</td>
                                                <td>43.000000</td>
                                                </tr>
                                                <tr>
                                                <td>50%</td>
                                                <td>3739.00000</td>
                                                <td>12.000000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>45.000000</td>
                                                <td>0.000000</td>
                                                <td>3.800000</td>
                                                <td>3.000000</td>
                                                <td>18.148750</td>
                                                <td>41.659400</td>
                                                <td>78104.876500</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>61.000000</td>
                                                <td>0.000000</td>
                                                <td>16.000000</td>
                                                <td>4.000000</td>
                                                <td>66.000000</td>
                                                </tr>
                                                <tr>
                                                <td>75%</td>
                                                <td>5786.25000</td>
                                                <td>18.000000</td>
                                                <td>0.000000</td>
                                                <td>0.016000</td>
                                                <td>64.000000</td>
                                                <td>0.000000</td>
                                                <td>7.500000</td>
                                                <td>7.000000</td>
                                                <td>30.185800</td>
                                                <td>51.585500</td>
                                                <td>78240.908000</td>
                                                <td>0.000000</td>
                                                <td>0.000000</td>
                                                <td>84.000000</td>
                                                <td>0.000000</td>
                                                <td>31.000000</td>
                                                <td>7.000000</td>
                                                <td>86.000000</td>
                                                </tr>
                                                <tr>
                                                <td>max</td>
                                                <td>7477.00000</td>
                                                <td>23.000000</td>
                                                <td>0.200000</td>
                                                <td>0.109000</td>
                                                <td>120.000000</td>
                                                <td>71.000000</td>
                                                <td>62.900000</td>
                                                <td>62.000000</td>
                                                <td>49.839500</td>
                                                <td>81.064500</td>
                                                <td>78829.778500</td>
                                                <td>2.000000</td>
                                                <td>37.000000</td>
                                                <td>121.000000</td>
                                                <td>49.000000</td>
                                                <td>151.000000</td>
                                                <td>54.000000</td>
                                                <td>151.000000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">
                                                Tracemos algunas gráficas de caja, que nos ayudan a visualizar mejor las anomalías y / o valores atípicos en la distribución de datos.
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <img src="/img/plot_caja.png" alt="Gráfica de cajas">
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">
                                                Tracemos algunas Gráficos de dispersión para cada entidad y la variable de destino, así como sus líneas de intercepción:
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <img src="/img/plot_dispersion.png" alt="Gráfica de cajas">
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">
                                                Dividir los datos en &quot;atributos&quot; y &quot;etiquetas&quot;:    
                                                <p>La variable X contiene todos los atributos/características y la variable Y contiene las etiquetas.</p>
                                            </div>                                                
                                        </div>
                                        <div class="">
                                                X = dataset[['CO_PPM', 'O3_PPM', 'SO2_PPB', 'NO2_PPB', 'PM25', 'PM10']].values <br>
                                                y = dataset['AQI'].values
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Dividimos el 80% de los datos para el conjunto de entrenamiento, 
                                                el 20% de los datos al conjunto de pruebas
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>&lt;X_train, X_test, y_train, y_test = train_test_split(X, y, test_size=0.2, random_state=0)&gt;</pre>
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div  class="text-value-lg">
                                                Para proporcionar una entrada estandarizada a nuestra red neuronal, necesitamos realizar la normalización de nuestro conjunto de datos.
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>&lt;mean = X_train.mean(axis=0)&gt;</pre> 
                                            <pre>&lt;std = X_train.std(axis=0)&gt;</pre> 
                                            <pre>&lt;X_train = (X_train - mean) / std&gt;</pre>
                                            <pre>&lt;X_test = (X_test - mean) / std&gt;</pre>
                                        </div>                                        
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Ahora construyamos al modelo de Red Neuronal
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            Vamos a adoptar una arquitectura basada en dos capas densas, la primera con 128 y la segunda con 64 neuronas, ambas utilizando una función de activación ReLU (unidad lineal rectificada). Una capa densa con una activación lineal se utilizará como capa de salida. 
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>model = Sequential()</pre>
                                            <pre>model.add(Dense(128, input_shape=(6, ), activation='relu', name='dense_1'))</pre>
                                            <pre>model.add(Dense(64, activation='relu', name='dense_2')))</pre>
                                            <pre>model.add(Dense(1, activation='linear', name='dense_output')</pre>
                                            <pre>&lt;model.compile(optimizer='adam', loss='mse', metrics=['mae','mean_absolute_error'])&gt;</pre>
                                            <pre>model.summary()</pre>
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>Salida modelo: "sequential_1</pre>
                                            <pre>
                                        _________________________________________________________________
                                            Layer (type)                 Output Shape              Param #   
                                            =================================================================
                                            dense_1 (Dense)              (None, 128)               896       
                                            _________________________________________________________________
                                            dense_2 (Dense)              (None, 64)                8256      
                                            _________________________________________________________________
                                            dense_output (Dense)         (None, 1)                 65        
                                            =================================================================
                                            Total params: 9,217
                                            Trainable params: 9,217
                                            Non-trainable params: 0
                                            _________________________________________________________________
                                            </pre>
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Ahora entrenamos al modelo de Red Neuronal
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>&lt;history = model.fit(X_train, y_train, epochs=100, validation_split=0.05)&gt;</pre>
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Realizamos la predicción sobre los datos de prueba
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>&lt;y_pred = model.predict(X_test)&gt;</pre>
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Verificamos la diferencia entre un valor real y el valor predicho
                                            </div>                                                
                                        </div>
                                        <div class="output_subarea output_stream output_stdout output_text">
                                            &nbsp;&nbsp;&nbsp;Actual &nbsp;&nbsp;   Predicted<br>
                                            
                                            0 &nbsp;&nbsp;     66 &nbsp;&nbsp;&nbsp;  66.358719<br>
                                            1 &nbsp;&nbsp;     46 &nbsp;&nbsp;&nbsp;  46.139912<br>
                                            2 &nbsp;&nbsp;     48  &nbsp;&nbsp;&nbsp; 48.221558<br>
                                            3 &nbsp;&nbsp;     93 &nbsp;&nbsp;&nbsp;  92.869728<br>
                                            4 &nbsp;&nbsp;     96 &nbsp;&nbsp;&nbsp;  94.443817<br>
                                            5 &nbsp;&nbsp;     85 &nbsp;&nbsp;&nbsp;  83.461960<br>
                                            6 &nbsp;&nbsp;    114 &nbsp;&nbsp; 114.434631<br>
                                            7 &nbsp;&nbsp;     36 &nbsp;&nbsp;&nbsp;  37.976620<br>
                                            8 &nbsp;&nbsp;    105 &nbsp;&nbsp; 105.152153<br>
                                            9 &nbsp;&nbsp;     85 &nbsp;&nbsp;&nbsp;  85.197395<br>
                                            
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Errores de evaluación del modelo de Red Neuronal
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <pre>&lt;Mean Absolute Error: 0.7871727227988458&gt;</pre>
                                            <pre>&lt;Mean Squared Error: 1.4752390422086368&gt;</pre>
                                            <pre>&lt;Root Mean Squared Error: 1.2145941882820932&gt;</pre>
                                        </div>
                                        <div class="c-callout c-callout-warning">
                                            <small class="text-muted"></small>
                                            <div class="text-value-lg">                                               
                                                Comparación gráfica del valor real y valor predicho
                                            </div>                                                
                                        </div>
                                        <div class="output_text output_subarea output_execute_result">
                                            <img src="data:image/png;base64,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">
                                        </div>                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>

    </main>