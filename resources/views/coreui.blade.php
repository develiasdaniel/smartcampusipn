<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Smart Campus IPN') }}</title>

    <link rel="stylesheet" href="icons/css/all.css">
    <link href="css/style.css" rel="stylesheet">
   
    <style type="text/css">
        
        @keyframes chartjs-render-animation {
            from {
                opacity: 0.99;
            }
            to {
                opacity: 1;
            }
        }
        
        .chartjs-render-monitor {
            animation: chartjs-render-animation 0.001s;
        }

        .bg-background-cic{
            background-color: #0a2a50;
        }

        #btn-coreui {
            color: #fff;
            border-color: #0a2a50;
        }

        #btn-coreui:hover {
            background: #1a569c;
        }
        /*
        * DOM element resizing detection
        * https://github.com/marcj/css-element-queries
        */
        
        .chartjs-size-monitor,
        .chartjs-size-monitor-expand,
        .chartjs-size-monitor-shrink {
            position: absolute;
            direction: ltr;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            pointer-events: none;
            visibility: hidden;
            z-index: -1;
        }
        
        .chartjs-size-monitor-expand > div {
            position: absolute;
            width: 1000000px;
            height: 1000000px;
            left: 0;
            top: 0;
        }
        
        .chartjs-size-monitor-shrink > div {
            position: absolute;
            width: 200%;
            height: 200%;
            left: 0 ;
            top: 0;
        }
    </style>
</head>

<body class="c-app">
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
            <li class="c-sidebar-nav-item">
                <a id="btn-coreui" class="c-sidebar-nav-link c-active" href="main.html">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-speedometer"></i>
                    </div>
                    Dashboard<span class="badge badge-info">NEW</span></a>
            </li>
            <li class="c-sidebar-nav-title">Theme</li>
            <li class="c-sidebar-nav-item">
                <a id="btn-coreui" class="c-sidebar-nav-link" href="colors.html">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-drop1"></i>
                    </div> Colors</a>
            </li>
            <li class="c-sidebar-nav-item">
                <a id="btn-coreui" class="c-sidebar-nav-link" href="typography.html">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-pencil"></i>
                    </div>
                    Typography</a>
            </li>
            <li class="c-sidebar-nav-title">Components</li>
            <li class="c-sidebar-nav-dropdown">
                <a id="btn-coreui" class="c-sidebar-nav-dropdown-toggle" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-puzzle"></i>
                    </div>  Base</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="base/breadcrumb.html"> Breadcrumb</a></li>
                    <li class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="base/cards.html"> Cards</a></li>
                    <li class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="base/carousel.html"> Carousel</a></li>
                    <li class="c-sidebar-nav-item"><a id="btn-coreui" class="c-sidebar-nav-link" href="base/collapse.html"> Collapse</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/jumbotron.html"> Jumbotron</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/list-group.html"> List group</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/navs.html"> Navs</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/pagination.html"> Pagination</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/popovers.html"> Popovers</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/progress.html"> Progress</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/scrollspy.html"> Scrollspy</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/switches.html"> Switches</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tabs.html"> Tabs</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="base/tooltips.html"> Tooltips</a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-cursor"></i>
                    </div>  Buttons</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/buttons.html"> Buttons</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/brand-buttons.html"> Brand Buttons</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/button-group.html"> Buttons Group</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/dropdowns.html"> Dropdowns</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="buttons/loading-buttons.html"> Loading Buttons<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="charts.html">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-chart-pie"></i>
                    </div> Charts</a>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                     <div class="c-sidebar-nav-icon">
                        <i class="cil-code"></i>
                    </div> Editors</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="editors/code-editor.html">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-notes"></i>
                        </div>Code Editor<span class="badge badge-danger">PRO</span></a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="editors/markdown-editor.html">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-code"></i>
                        </div> Markdown<span class="badge badge-danger">PRO</span></a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="editors/text-editor.html">
                            <div class="c-sidebar-nav-icon">
                                <i class="cil-notes"></i>
                            </div>  Rich Text Editor<span class="badge badge-danger">PRO</span></a>
                    </li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-notes"></i>
                        </div> Forms</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/basic-forms.html"> Basic Forms</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/advanced-forms.html"> Advanced<span class="badge badge-danger">PRO</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="forms/validation.html"> Validation<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="google-maps.html">
                <div class="c-sidebar-nav-icon">
                    <i class="cil-map"></i>
                </div> Google Maps<span class="badge badge-danger">PRO</span></a>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-star"></i>
                    </div>  Icons</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-success">Free</span></a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                    <div class="c-sidebar-nav-icon">
                        <i class="cil-bell"></i>
                    </div> Notifications</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/alerts.html"> Alerts</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/badge.html"> Badge</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/modals.html"> Modals</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="notifications/toastr.html"> Toastr<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-bolt"></i>
                        </div>  Plugins</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="plugins/calendar.html">
                            <div class="c-sidebar-nav-icon">
                                <i class="cil-calendar"></i>
                            </div>  Calendar<span class="badge badge-danger">PRO</span></a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="plugins/draggable-cards.html">
                            <div class="c-sidebar-nav-icon">
                                <i class="cil-cursor-move"></i>
                            </div>  Draggable<span class="badge badge-danger">PRO</span></a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="plugins/spinners.html">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-sync"></i>
                        </div>  Spinners<span class="badge badge-danger">PRO</span></a>
                    </li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-columns"></i>
                        </div> Tables</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="tables/tables.html"> Standard Tables</a></li>
                    <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="tables/datatables.html"> DataTables<span class="badge badge-danger">PRO</span></a></li>
                </ul>
            </li>
            <li class="c-sidebar-nav-item">
                <a class="c-sidebar-nav-link" href="widgets.html">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-calculator"></i>
                        </div> Widgets<span class="badge badge-info">NEW</span></a>
            </li>
            <li class="c-sidebar-nav-divider"></li>
            <li class="c-sidebar-nav-title">Extras</li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-star"></i>
                        </div>  Pages</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="login.html" target="_top">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-account-logout"></i>
                        </div>  Login</a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="register.html" target="_top">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-account-logout"></i>
                        </div>  Register</a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="404.html" target="_top">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-bug"></i>
                        </div>  Error 404</a>
                    </li>
                    <li class="c-sidebar-nav-item">
                        <a class="c-sidebar-nav-link" href="500.html" target="_top">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-bug"></i>
                        </div>  Error 500</a>
                    </li>
                </ul>
            </li>
            <li class="c-sidebar-nav-dropdown">
                <a class="c-sidebar-nav-dropdown-toggle" href="#">
                        <div class="c-sidebar-nav-icon">
                            <i class="cil-layers"></i>
                        </div> Apps</a>
                <ul class="c-sidebar-nav-dropdown-items">
                    <li class="c-sidebar-nav-dropdown">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#">
                            <div class="c-sidebar-nav-icon">
                                <i class="cil-description"></i>
                            </div>  Invoicing</a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/invoicing/invoice.html"> Invoice<span class="badge badge-danger">PRO</span></a></li>
                        </ul>
                    </li>
                    <li class="c-sidebar-nav-dropdown">
                        <a class="c-sidebar-nav-dropdown-toggle" href="#">                            
                            <div class="c-sidebar-nav-icon">
                                <i class="cil-envelope-open"></i>
                            </div> Email</a>
                        <ul class="c-sidebar-nav-dropdown-items">
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/inbox.html"> Inbox<span class="badge badge-danger">PRO</span></a></li>
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/message.html"> Message<span class="badge badge-danger">PRO</span></a></li>
                            <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="apps/email/compose.html"> Compose<span class="badge badge-danger">PRO</span></a></li>
                        </ul>
                    </li>
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

    <div class="c-sidebar c-sidebar-lg c-sidebar-light c-sidebar-right
        c-sidebar-overlaid" id="aside">
        <button class="c-sidebar-close c-class-toggler" type="button"
            data-target="_parent" data-class="c-sidebar-show" responsive="true">
            <div class="c-icon">
                <i class="cil-x"></i>
            </div>
        </button>
        <ul class="nav nav-tabs nav-underline nav-underline-primary" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab"
                    href="#timeline" role="tab" aria-selected="true">
                    <div class="c-icon">
                        <i class="cil-list"></i>
                    </div>
                </a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                    href="#messages" role="tab" aria-selected="false">
                    <div class="c-icon">
                        <i class="cil-speech"></i>
                    </div></a>
            </li>
            <li class="nav-item"><a class="nav-link" data-toggle="tab"
                    href="#settings" role="tab" aria-selected="false">
                    <div class="c-icon">
                        <i class="cil-settings"></i>
                    </div></a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="list-group list-group-accent">
                    <div class="list-group-item list-group-item-accent-secondary
                        bg-light text-center font-weight-bold text-muted
                        text-uppercase c-small">Today
                    </div>
                    <div class="list-group-item list-group-item-accent-warning
                        list-group-item-divider">
                        <div class="c-avatar float-right"><img class="c-avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com"></div>
                        <div>Meeting with <strong>Lucas</strong></div><small
                            class="text-muted mr-3">
                            <div class="c-icon">
                                <i class="cil-calendar"></i>
                            </div>
                            &nbsp; 1 - 3pm</small><small class="text-muted">
                            <div class="c-icon">
                                <i class="cil-location-pin"></i>
                            </div>
                            &nbsp; Palo Alto, CA</small>
                    </div>
                    <div class="list-group-item list-group-item-accent-info">
                        <div class="c-avatar float-right"><img class="c-avatar-img"
                                src="assets/img/avatars/4.jpg" alt="user@email.com"></div>
                        <div>Skype with <strong>Megan</strong></div><small
                            class="text-muted mr-3">
                            <div class="c-icon">
                                <i class="cil-calendar"></i>
                            </div>
                            &nbsp; 4 - 5pm</small><small class="text-muted">
                            <div class="c-icon">
                                <i class="cil-skype"></i>
                            </div>
                            &nbsp; On-line</small>
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
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/3.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/4.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/5.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/6.jpg"
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
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/3.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/4.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/5.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/6.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/7.jpg"
                                    alt="user@email.com"></div>
                            <div class="c-avatar c-avatar-xs"><img
                                    class="c-avatar-img"
                                    src="assets/img/avatars/8.jpg"
                                    alt="user@email.com"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane p-3" id="messages" role="tabpanel">
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar">
                            <img class="c-avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com">
                            <span class="c-avatar-status bg-success"></span>
                        </div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small
                            class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor
                        sit amet</div><small class="text-muted">Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com"><span
                                class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small
                            class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor
                        sit amet</div><small class="text-muted">Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com"><span
                                class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small
                            class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor
                        sit amet</div><small class="text-muted">Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com"><span
                                class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small
                            class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor
                        sit amet</div><small class="text-muted">Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="py-3 pb-5 mr-3 float-left">
                        <div class="c-avatar"><img class="c-avatar-img"
                                src="assets/img/avatars/7.jpg" alt="user@email.com"><span
                                class="c-avatar-status bg-success"></span></div>
                    </div>
                    <div><small class="text-muted">Lukasz Holeczek</small><small
                            class="text-muted float-right mt-1">1:52 PM</small></div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor
                        sit amet</div><small class="text-muted">Lorem ipsum dolor
                        sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-3" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="c-aside-options">
                    <div class="clearfix mt-4"><small><b>Option 1</b></small>
                        <label class="c-switch c-switch-label c-switch-pill
                            c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"
                                checked=""><span class="c-switch-slider"
                                data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div><small class="text-muted">Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 2</b></small>
                        <label class="c-switch c-switch-label c-switch-pill
                            c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"><span
                                class="c-switch-slider" data-checked="On"
                                data-unchecked="Off"></span>
                        </label>
                    </div>
                    <div><small class="text-muted">Lorem ipsum dolor sit amet,
                            consectetur adipisicing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 3</b></small>
                        <label class="c-switch c-switch-label c-switch-pill
                            c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"><span
                                class="c-switch-slider" data-checked="On"
                                data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <div class="c-aside-options">
                    <div class="clearfix mt-3"><small><b>Option 4</b></small>
                        <label class="c-switch c-switch-label c-switch-pill
                            c-switch-success c-switch-sm float-right">
                            <input class="c-switch-input" type="checkbox"
                                checked=""><span class="c-switch-slider"
                                data-checked="On" data-unchecked="Off"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase mb-1 mt-4"><small><b>CPU Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-info" role="progressbar"
                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                        aria-valuemax="100">
                </div>
                </div>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>Memory Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-warning" role="progressbar"
                        style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 1 Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-danger" role="progressbar"
                        style="width: 95%" aria-valuenow="95" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase mb-1 mt-2"><small><b>SSD 2 Usage</b></small>
                </div>
                <div class="progress progress-xs">
                    <div class="progress-bar bg-success" role="progressbar"
                        style="width: 10%" aria-valuenow="10" aria-valuemin="0"
                        aria-valuemax="100"></div>
                </div>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </div>
    
    
    <div class="c-wrapper">
        <header class="c-header c-header-light c-header-fixed">
            <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar" data-class="c-sidebar-show">
                <div class="c-icon c-icon-lg">
                <i class="cil-menu"></i>
                </div>
            </button>
            <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar" data-class="c-sidebar-lg-show" responsive="true">
                <div class="c-icon c-icon-lg">
                <i class="cil-menu"></i>
                </div>
            </button>
            <ul class="c-header-nav d-md-down-none">
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
                <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="c-header-nav mfs-auto">
                <li class="c-header-nav-item px-3 c-d-legacy-none">
                    <button class="c-class-toggler c-header-nav-btn" type="button" id="header-tooltip" data-target="body" data-class="c-dark-theme" data-toggle="c-tooltip" data-placement="bottom" title="" data-original-title="Toggle Light/Dark Mode">
                        <div class="c-icon c-d-dark-none">
                            <i class="cil-moon"></i>
                        </div>
                        <div class="c-icon c-d-default-none">
                            <i class="cil-sun"></i>
                        </div>
                    </button>
                </li>
            </ul>
            <ul class="c-header-nav">
                <li class="c-header-nav-item dropdown mx-2">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-icon">
                            <i class="cil-bell"></i>
                        </div>              
                        <span class="badge badge-pill badge-danger">5</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light">
                            <strong>You have 5 notifications</strong>
                        </div>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2 text-success">
                                <i class="cil-user-follow"></i>
                            </div>
                            New user registered
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2 text-danger">
                                <i class="cil-user-unfollow"></i>
                            </div>
                            User deleted
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2 text-info">
                                <i class="cil-chart"></i>
                            </div>
                            Sales report is ready
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2 text-success">
                                <i class="cil-basket"></i>
                            </div>
                            New client
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2 text-warning">
                                <i class="cil-speedometer"></i>
                            </div>
                            Server overloaded
                        </a>
                        <div class="dropdown-header bg-light">
                            <strong>Server</strong>
                        </div>
                        <a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1">
                                <small><b>CPU Usage</b></small>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                            <small class="text-muted">348 Processes. 1/4 Cores.</small>
                        </a>
                        <a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1">
                                <small><b>Memory Usage</b></small>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                            <small class="text-muted">11444GB/16384MB</small>
                        </a>
                        <a class="dropdown-item d-block" href="#">
                            <div class="text-uppercase mb-1">
                                <small><b>SSD 1 Usage</b></small>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                            <small class="text-muted">243GB/256GB</small>
                        </a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown mx-2">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-icon">
                            <i class="cil-list-rich"></i>
                        </div>
                        <span class="badge badge-pill badge-warning">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light"><strong>You have 5 pending tasks</strong></div>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Upgrade NPM &amp; Bower
                                <span class="float-right"><strong>0%</strong></span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                        </a>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">ReactJS Version
                                <span class="float-right"><strong>25%</strong></span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-danger" role="progressbar" style="width:
                                    25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                        </a>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">VueJS Version
                                <span class="float-right"><strong>50%</strong></span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-warning" role="progressbar" style="width:
                                    50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                        </a>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Add new layouts
                                <span class="float-right"><strong>75%</strong></span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 75%"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                        </a>
                        <a class="dropdown-item d-block" href="#">
                            <div class="small mb-1">Angular 8 Version
                                <span class="float-right"><strong>100%</strong></span>
                            </div>
                            <span class="progress progress-xs">
                                <div class="progress-bar bg-success" role="progressbar" style="width:
                                    100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </span>
                        </a>
                        <a class="dropdown-item text-center border-top" href="#">
                            <strong>View all tasks</strong>
                        </a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown mx-2">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-icon">
                            <i class="cil-envelope-open"></i>
                        </div>
                        <span class="badge badge-pill badge-info">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0">
                        <div class="dropdown-header bg-light">
                            <strong>You have 4 messages</strong>
                        </div>
                        <a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar">
                                            <img class="c-avatar-img"
                                            src="assets/img/avatars/7.jpg" alt="user@email.com">
                                            <span class="c-avatar-status bg-success">
                                            </span>
                                    </div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small class="text-muted
                                        float-right mt-1">Just now</small>
                                </div>
                                <div class="text-truncate font-weight-bold"><span class="text-danger">!</span>
                                    Important message
                                </div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img"
                                            src="assets/img/avatars/6.jpg" alt="user@email.com">
                                            <span class="c-avatar-status bg-warning"></span>
                                    </div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small class="text-muted
                                        float-right mt-1">5 minutes ago</small>
                                </div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet                            
                                </div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar"><img class="c-avatar-img"
                                            src="assets/img/avatars/5.jpg" alt="user@email.com">
                                            <span class="c-avatar-status bg-danger"></span>
                                    </div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small class="text-muted
                                        float-right mt-1">1:52 PM</small>
                                </div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet                            
                                </div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="message">
                                <div class="py-3 mfe-3 float-left">
                                    <div class="c-avatar">
                                        <img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com">
                                        <span class="c-avatar-status bg-info"></span>
                                    </div>
                                </div>
                                <div><small class="text-muted">John Doe</small><small class="text-muted
                                        float-right mt-1">4:03 PM</small>
                                </div>
                                <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet

                                </div>
                                <div class="small text-muted text-truncate">Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit, sed do eiusmod tempor incididunt...
                                </div>
                            </div>
                        </a>
                        <a class="dropdown-item text-center border-top" href="#">
                            <strong>View all messages</strong>
                        </a>
                    </div>
                </li>
                <li class="c-header-nav-item dropdown">
                    <a class="c-header-nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="c-avatar"><img class="c-avatar-img"
                                src="assets/img/avatars/6.jpg" alt="user@email.com">
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <strong>Account</strong>
                        </div>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-bell"></i>
                            </div>
                            Updates<span class="badge badge-info mfs-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-envelope-open"></i>
                            </div>
                            Messages<span class="badge badge-success mfs-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-task"></i>
                            </div>
                            Tasks<span class="badge badge-danger mfs-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-comment-square"></i>
                            </div>
                            Comments<span class="badge badge-warning mfs-auto">42</span>
                        </a>
                        <div class="dropdown-header bg-light py-2">
                            <strong>Settings</strong>
                        </div>
                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#exampleProfile">
                            <div class="c-icon mfe-2">
                                <i class="cil-user"></i>
                            </div>
                            Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-settings"></i>
                            </div>
                            Settings
                        </a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-credit-card"></i>
                            </div>
                            Payments<span class="badge badge-secondary mfs-auto">42</span>
                        </a>
                        <a class="dropdown-item" href="#">
                        <div class="c-icon mfe-2">
                                <i class="cil-file"></i>
                            </div>
                            Projects<span class="badge badge-primary mfs-auto">42</span>
                        </a>
                        <div class="dropdown-divider">
                        </div>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-lock-locked"></i>
                            </div>
                            Lock Account</a>
                        <a class="dropdown-item" href="#">
                            <div class="c-icon mfe-2">
                                <i class="cil-account-logout"></i>
                            </div>
                            Logout
                        </a>
                    </div>
                </li>
                <button class="c-header-toggler c-class-toggler mfe-md-3" type="button" data-target="#aside" data-class="c-sidebar-show">
                    <div class="c-icon c-icon-lg">
                        <i class="cil-applications-settings"></i>
                    </div>
                </button>
            </ul>
            <div class="c-subheader justify-content-between px-3">
                <ol class="breadcrumb border-0 m-0 px-0 px-md-3">
                    <li class="breadcrumb-item">Home</li>
                    <li class="breadcrumb-item"><a href="#">Admin</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
                <div class="c-subheader-nav d-md-down-none mfe-2">
                    <a class="c-subheader-nav-link" href="#">
                        <div class="c-icon mfe-2">
                            <i class="cil-speech"></i>
                        </div>
                    </a>
                    <a class="c-subheader-nav-link" href="#">
                        <div class="c-icon mfe-2">
                            <i class="cil-graph"></i>
                        </div>  
                        &nbsp;Dashboard
                    </a>
                    <a class="c-subheader-nav-link" href="#">
                        <div class="c-icon mfe-2">
                            <i class="cil-settings"></i>
                        </div>
                        &nbsp;Settings
                    </a>
                </div>
            </div>
        </header>

        <div class="c-body">
            
            <main class="c-main">
                <div class="container-fluid">
                    <div id="ui-view">

                        <div>
                            <link href="css/coreui-chartjs.css" rel="stylesheet">

                            <div class="fade-in">
                                <div class="row">
                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card text-white bg-gradient-primary">
                                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                                <div>
                                                    <div class="text-value-lg">9.823</div>
                                                    <div>Members online</div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class="c-icon">
                                                            <i class="cil-settings"></i>
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
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
                                        <div class="card text-white bg-gradient-info">
                                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                                <div>
                                                    <div class="text-value-lg">9.823</div>
                                                    <div>Members online</div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class=c-icon>
                                                            <i class="cil-settings"></i>
                                                        </div> 
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
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
                                                <canvas class="chart chartjs-render-monitor" id="card-chart2" height="70" width="204" style="display: block; width: 204px; height: 70px;">
                                            </canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card text-white bg-gradient-warning">
                                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                                <div>
                                                    <div class="text-value-lg">9.823</div>
                                                    <div>Members online</div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class=c-icon>
                                                            <i class="cil-settings"></i>
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Action</a>
                                                        <a class="dropdown-item" href="#">Another action</a>
                                                        <a class="dropdown-item" href="#">Something else here</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="c-chart-wrapper mt-3" style="height:70px;">
                                                <div class="chartjs-size-monitor">
                                                    <div class="chartjs-size-monitor-expand">
                                                        <div class=""></div>
                                                    </div>
                                                    <div class="chartjs-size-monitor-shrink">
                                                        <div class=""></div>
                                                    </div>
                                                </div>
                                                <canvas class="chart chartjs-render-monitor" id="card-chart3" height="70" width="236" style="display: block; width: 236px; height: 70px;">
                                            </canvas>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-3">
                                        <div class="card text-white bg-gradient-danger">
                                            <div class="card-body card-body pb-0 d-flex justify-content-between align-items-start">
                                                <div>
                                                    <div class="text-value-lg">9.823</div>
                                                    <div>Members online</div>
                                                </div>
                                                <div class="btn-group">
                                                    <button class="btn btn-transparent dropdown-toggle p-0" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <div class=c-icon>
                                                            <i class="cil-settings"></i>
                                                        </div>
                                                    </button>
                                                    <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
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
                                                <canvas class="chart chartjs-render-monitor" id="card-chart4" height="70" width="204" style="display: block; width: 204px; height: 70px;"></canvas>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <h4 class="card-title mb-0">Traffic</h4>
                                                <div class="small text-muted">September 2019</div>
                                            </div>
                                            <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                                                <div class="btn-group btn-group-toggle mx-3" data-toggle="buttons">
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
                                                <button class="btn btn-primary" type="button">
                                                    <div class="c-icon">
                                                        <i class="cil-cloud-download"></i>
                                                    </div> 
                                                </button>
                                            </div>
                                        </div>
                                        <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                                            <div class="chartjs-size-monitor">
                                                <div class="chartjs-size-monitor-expand">
                                                    <div class=""></div>
                                                </div>
                                                <div class="chartjs-size-monitor-shrink">
                                                    <div class=""></div>
                                                </div>
                                            </div>
                                            <canvas class="chart chartjs-render-monitor" id="main-chart" height="300" width="993" style="display: block;">
                                            </canvas>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="row text-center">
                                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                                <div class="text-muted">Visits</div><strong>29.703 Users (40%)</strong>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                                <div class="text-muted">Unique</div><strong>24.093 Users (20%)</strong>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                                <div class="text-muted">Pageviews</div><strong>78.706 Views (60%)</strong>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                                <div class="text-muted">New Users</div><strong>22.123 Users (80%)</strong>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="col-sm-12 col-md mb-sm-2 mb-0">
                                                <div class="text-muted">Bounce Rate</div><strong>40.15%</strong>
                                                <div class="progress progress-xs mt-2">
                                                    <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="card-header bg-facebook content-center">
                                                <div class="c-icon c-icon-3xl text-white my-4">
                                                    <i class="cib-facebook-f"></i>
                                                </div>    
                                            </div>
                                            <div class="card-body row text-center">
                                                <div class="col">
                                                    <div class="text-value-xl">89k</div>
                                                    <div class="text-uppercase text-muted small">friends</div>
                                                </div>
                                                <div class="c-vr"></div>
                                                <div class="col">
                                                    <div class="text-value-xl">459</div>
                                                    <div class="text-uppercase text-muted small">feeds</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="card-header bg-twitter content-center">
                                                <div class="c-icon c-icon-3xl text-white my-4">
                                                    <i class="cib-twitter"></i>
                                                </div> 
                                            </div>
                                            <div class="card-body row text-center">
                                                <div class="col">
                                                    <div class="text-value-xl">973k</div>
                                                    <div class="text-uppercase text-muted small">followers</div>
                                                </div>
                                                <div class="c-vr"></div>
                                                <div class="col">
                                                    <div class="text-value-xl">1.792</div>
                                                    <div class="text-uppercase text-muted small">tweets</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-lg-4">
                                        <div class="card">
                                            <div class="card-header bg-linkedin content-center">
                                                <div class="c-icon c-icon-3xl text-white my-4">
                                                    <i class="cib-linkedin"></i>
                                                </div>
                                            </div>
                                            <div class="card-body row text-center">
                                                <div class="col">
                                                    <div class="text-value-xl">500+</div>
                                                    <div class="text-uppercase text-muted small">contacts</div>
                                                </div>
                                                <div class="c-vr"></div>
                                                <div class="col">
                                                    <div class="text-value-xl">292</div>
                                                    <div class="text-uppercase text-muted small">feeds</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                Traffic &amp; Sales
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="c-callout c-callout-info"><small class="text-muted">New Clients</small>
                                                                    <div class="text-value-lg">9,123</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="c-callout c-callout-danger"><small class="text-muted">Recuring Clients</small>
                                                                    <div class="text-value-lg">22,643</div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr class="mt-0">
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend"><span class="progress-group-text">
                                                                Monday</span>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend"><span class="progress-group-text">Tuesday</span></div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend"><span class="progress-group-text">
                                                                Wednesday</span>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend">
                                                                <span class="progress-group-text">Thursday</span>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend">
                                                                <span class="progress-group-text">Friday</span>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend">
                                                                <span class="progress-group-text">Saturday</span>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-4">
                                                            <div class="progress-group-prepend">
                                                                <span class="progress-group-text">Sunday</span>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-6">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <div class="c-callout c-callout-warning">
                                                                    <small class="text-muted">Pageviews</small>
                                                                    <div class="text-value-lg">78,623</div>
                                                                </div>
                                                            </div>

                                                            <div class="col-6">
                                                                <div class="c-callout c-callout-success">
                                                                    <small class="text-muted">Organic</small>
                                                                    <div class="text-value-lg">49,123</div>
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <hr class="mt-0">
                                                        <div class="progress-group">
                                                            <div class="progress-group-header">
                                                                <div class="c-icon progress-group-icon">
                                                                    <i class="cil-user"></i>
                                                                </div>
                                                                <div>Male</div>
                                                                <div class="mfs-auto font-weight-bold">43%</div>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group mb-5">
                                                            <div class="progress-group-header">
                                                                <div class="c-icon progress-group-icon">
                                                                    <i class="cil-user-female"></i>
                                                                </div>  
                                                                <div>Female</div>
                                                                <div class="mfs-auto font-weight-bold">37%</div>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group">
                                                            <div class="progress-group-header align-items-end">
                                                                <div class="c-icon progress-group-icon">
                                                                    <i class="cib-google"></i>
                                                                </div>   
                                                                <div>Organic Search</div>
                                                                <div class="mfs-auto font-weight-bold mfe-2">191.235</div>
                                                                <div class="text-muted small">(56%)</div>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group">
                                                            <div class="progress-group-header align-items-end">
                                                                <div class="c-icon progress-group-icon">
                                                                    <i class="cib-facebook-f"></i>
                                                                </div>  
                                                                <div>Facebook</div>
                                                                <div class="mfs-auto font-weight-bold mfe-2">51.223</div>
                                                                <div class="text-muted small">(15%)</div>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group">
                                                            <div class="progress-group-header align-items-end">
                                                                <div class="c-icon progress-group-icon">
                                                                    <i class="cib-twitter"></i>
                                                                </div>
                                                                <div>Twitter</div>
                                                                <div class="mfs-auto font-weight-bold mfe-2">37.564</div>
                                                                <div class="text-muted small">(11%)</div>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="progress-group">
                                                            <div class="progress-group-header align-items-end">
                                                                <div class="c-icon progress-group-icon">
                                                                    <i class="cib-linkedin"></i>
                                                                </div>
                                                                <div>LinkedIn</div>
                                                                <div class="mfs-auto font-weight-bold mfe-2">27.319</div>
                                                                <div class="text-muted small">(8%)</div>
                                                            </div>
                                                            <div class="progress-group-bars">
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <br>
                                                <table class="table table-responsive-sm table-hover table-outline mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th class="text-center">
                                                                <div class="c-icon">
                                                                    <i class="cil-people"></i>
                                                                </div>
                                                            </th>
                                                            <th>User</th>
                                                            <th class="text-center">Country</th>
                                                            <th>Usage</th>
                                                            <th class="text-center">Payment Method</th>
                                                            <th>Activity</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                                                            </td>
                                                            <td>
                                                                <div>Yiorgos Avraamu</div>
                                                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cif-us"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="clearfix">
                                                                    <div class="float-left"><strong>50%</strong></div>
                                                                    <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cib-cc-mastercard"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="small text-muted">Last login</div><strong>10 sec ago</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                                                            </td>
                                                            <td>
                                                                <div>Avram Tarasios</div>
                                                                <div class="small text-muted"><span>Recurring</span> | Registered: Jan 1, 2015</div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cif-br"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="clearfix">
                                                                    <div class="float-left"><strong>10%</strong></div>
                                                                    <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cib-cc-visa"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="small text-muted">Last login</div><strong>5 minutes ago</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="c-avatar-status bg-warning"></span></div>
                                                            </td>
                                                            <td>
                                                                <div>Quintin Ed</div>
                                                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cif-in"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="clearfix">
                                                                    <div class="float-left"><strong>74%</strong></div>
                                                                    <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cib-cc-stripe"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="small text-muted">Last login</div><strong>1 hour ago</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="c-avatar-status bg-secondary"></span></div>
                                                            </td>
                                                            <td>
                                                                <div>Enéas Kwadwo</div>
                                                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cif-fr"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="clearfix">
                                                                    <div class="float-left"><strong>98%</strong></div>
                                                                    <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cib-cc-paypal"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="small text-muted">Last login</div><strong>Last month</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="c-avatar-status bg-success"></span></div>
                                                            </td>
                                                            <td>
                                                                <div>Agapetus Tadeáš</div>
                                                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cif-es"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="clearfix">
                                                                    <div class="float-left"><strong>22%</strong></div>
                                                                    <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cib-cc-apple-pay"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="small text-muted">Last login</div><strong>Last week</strong>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td class="text-center">
                                                                <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="c-avatar-status bg-danger"></span></div>
                                                            </td>
                                                            <td>
                                                                <div>Friderik Dávid</div>
                                                                <div class="small text-muted"><span>New</span> | Registered: Jan 1, 2015</div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cif-pl"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="clearfix">
                                                                    <div class="float-left"><strong>43%</strong></div>
                                                                    <div class="float-right"><small class="text-muted">Jun 11, 2015 - Jul 10, 2015</small></div>
                                                                </div>
                                                                <div class="progress progress-xs">
                                                                    <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <div class="c-icon c-icon-xl">
                                                                    <i class="cib-cc-amex"></i>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="small text-muted">Last login</div><strong>Yesterday</strong>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                

                            </div>
                        </div>
                    </div>
                </div>
            </main>

            <footer class="c-footer">
                <div><a href="https://coreui.io">CoreUI</a> © 2020 creativeLabs.</div>
                <div class="mfs-auto">Powered by&nbsp;<a href="https://coreui.io/pro/">CoreUI Pro</a></div>
                Copy
                <!-- Button trigger modal example-->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleProfile">
                Launch demo modal
                </button>

                <!-- Modal example-->
                <div class="modal fade" id="exampleProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        sdfghjklñ
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                    </div>
                </div>
                </div>
            </footer>
        </div>
        
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js">
    <script src="js/coreui.bundle.min.js"></script>    
    <script>
        /*
        new coreui.AsyncLoad(document.getElementById('ui-view'));*/
        var tooltipEl = document.getElementById('header-tooltip');
        var tootltip = new coreui.Tooltip(tooltipEl);

        /*construir tooltips
        var exampleEl = document.getElementById('xxde')
        var tooltip = new coreui.Tooltip(exampleEl)
        */
    </script>

    <script type="text/javascript" src="js/app.js"></script>
    <script type="text/javascript" src="js/coreui-chartjs.bundle.js" class="view-script">
    </script>
    <script type="text/javascript" src="js/coreui-utils.js" class="view-script">
    </script>
    <script type="text/javascript" src="js/main.js" class="view-script">
    </script>
</body>

</html>