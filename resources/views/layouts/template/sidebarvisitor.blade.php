
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show bg-background-cic" id="sidebar">
    <div class="c-sidebar-brand d-md-down-none">
        <div class="c-sidebar-brand-full"  width="118" height="46" alt="CoreUI Logo">
            <i class="cil-speedometer"></i>
        </div>
        <div class="c-sidebar-brand-minimized" width="118" height="46" alt="CoreUI Logo">
            <i class="cil-drop1"></i>
        </div>
    </div>
    <ul class="c-sidebar-nav ps ps--active-y">
        <li @click="menu=0" class="c-sidebar-nav-item">
            <a id="btn-coreui" class="c-sidebar-nav-link c-active" href="#">
                <div class="c-sidebar-nav-icon">
                    <i class="cil-speedometer"></i>
                </div>
                AQI General<span class="badge badge-info">ver</span></a>
        </li>
        <li class="c-sidebar-nav-title">Medio Ambiente</li>
        <li class="c-sidebar-nav-dropdown">
            <a id="btn-coreui" class="c-sidebar-nav-dropdown-toggle" href="#">
                <div class="c-sidebar-nav-icon">
                    <i class="cil-globe-alt"></i>
                </div> Índice de la Calidad del aire </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li @click="menu=1" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Ozono (03)</a></li>
                <li @click="menu=2" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Monóxido de Carbono (CO)</a></li>
                <li @click="menu=3" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Dióxido de Azufre (SO2)</a></li>
                <li @click="menu=4" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Dióxido de nitrogeno (NO2)</a></li>
                <li @click="menu=5" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Partículas Materia (PM10)</a></li>
                <li @click="menu=6" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Partículas Materia (PM2.5)</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a id="btn-coreui" class="c-sidebar-nav-dropdown-toggle" href="#">
                <div class="c-sidebar-nav-icon">
                    <i class="cil-sun"></i>
                </div>  Contaminación del Aire</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li @click="menu=7" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Ozono (03)</a></li>
                <li @click="menu=8" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Monóxido de Carbono (CO)</a></li>
                <li @click="menu=9" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Dióxido de Azufre (SO2)</a></li>
                <li @click="menu=10" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Dióxido de nitrogeno (NO2)</a></li>
                <li @click="menu=12" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Partículas Materia (PM10)</a></li>
                <li @click="menu=13" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Partículas Materia (PM2.5)</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a id="btn-coreui" class="c-sidebar-nav-dropdown-toggle" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-rain"></i>
                    </div> Meteorología</a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li @click="menu=14" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-fire"></i>
                    </div>Temperatura</a></li>
                <li @click="menu=15" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-plant"></i>
                    </div> Humedad</a></li>
                <li @click="menu=16" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-gauge"></i>
                    </div> Presión</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-dropdown">
            <a id="btn-coreui" class="c-sidebar-nav-dropdown-toggle" href="#">
                <div class="c-sidebar-nav-icon">
                    <i class="cil-chart-line"></i>
                </div> Análisis de datos </a>
            <ul class="c-sidebar-nav-dropdown-items">
                <li @click="menu=21" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Soporte de Máquinas Vectoriales</a></li>
                <li @click="menu=22" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Regresión Lineal</a></li>
                <li @click="menu=23" class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="#"> Red Neuronal</a></li>
            </ul>
        </li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">Labels</li>
        <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none">
            <a class="c-sidebar-nav-label" href="#">
                    <div class="c-sidebar-nav-icon text-danger">
                        <i class="cil-bookmark"></i>
                    </div> Label danger</a>
        </li>
        <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none">
            <a class="c-sidebar-nav-label" href="#">
                    <div class="c-sidebar-nav-icon text-info">
                        <i class="cil-bookmark"></i>
                    </div>Label info</a>
        </li>
        <li class="c-sidebar-nav-item c-d-compact-none c-d-minimized-none">
            <a class="c-sidebar-nav-label" href="#">
                    <div class="c-sidebar-nav-icon text-warning">
                        <i class="cil-bookmark"></i>
                    </div> Label warning</a>
        </li>
        <li class="c-sidebar-nav-divider"></li>
        <li class="c-sidebar-nav-title">System Utilization</li>
        <li class="c-sidebar-nav-item px-3 c-d-compact-none c-d-minimized-none">
            <div class="text-uppercase mb-1"><small><b>CPU Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">348 Processes. 1/4 Cores.</small>
        </li>
        <li class="c-sidebar-nav-item px-3 c-d-compact-none c-d-minimized-none">
            <div class="text-uppercase mb-1"><small><b>Memory Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">11444GB/16384MB</small>
        </li>
        <li class="c-sidebar-nav-item px-3 mb-3 c-d-compact-none c-d-minimized-none">
            <div class="text-uppercase mb-1"><small><b>SSD 1 Usage</b></small></div>
            <div class="progress progress-xs">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
            </div><small class="text-muted">243GB/256GB</small>
        </li>
        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
            <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
        </div>
        <div class="ps__rail-y" style="top: 0px; height: 246px; right: 0px;">
            <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 46px;"></div>
        </div>
    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>
</div>