<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

        <title> SmartAdmin </title>
        <meta name="description" content="">
        <meta name="author" content="">
            
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Basic Styles -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/font-awesome.min.css')}}">

        <!-- SmartAdmin Styles : Caution! DO NOT change the order -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/smartadmin-production-plugins.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/smartadmin-production.min.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/smartadmin-skins.min.css')}}">

        <!-- SmartAdmin RTL Support -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/smartadmin-rtl.min.css')}}"> 

        <!-- We recommend you use "your_style.css" to override SmartAdmin
             specific styles this will also ensure you retrain your customization with each SmartAdmin update.
        <link rel="stylesheet" type="text/css" media="screen" href="css/your_style.css"> -->

        <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
        <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/demo.min.css')}}">

        <!-- FAVICONS -->
        <link rel="shortcut icon" href="{{url('img/favicon/favicon.ico')}}" type="image/x-icon">
        <link rel="icon" href="{{url('img/favicon/favicon.ico')}}" type="image/x-icon">

        <!-- GOOGLE FONT -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

        <!-- Specifying a Webpage Icon for Web Clip 
             Ref: https://developer.apple.com/library/ios/documentation/AppleApplications/Reference/SafariWebContent/ConfiguringWebApplications/ConfiguringWebApplications.html -->
        <link rel="apple-touch-icon" href="{{url('img/splash/sptouch-icon-iphone.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{url('img/splash/touch-icon-ipad.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{url('img/splash/touch-icon-iphone-retina.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{url('img/splash/touch-icon-ipad-retina.png')}}">
        
        <!-- iOS web-app metas : hides Safari UI Components and Changes Status Bar Appearance -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        
        <!-- Startup image for web apps -->
        <link rel="apple-touch-startup-image" href="{{url('img/splash/ipad-landscape.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">
        <link rel="apple-touch-startup-image" href="{{url('img/splash/ipad-portrait.png')}}" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
        <link rel="apple-touch-startup-image" href="{{url('img/splash/iphone.png')}}" media="screen and (max-device-width: 320px)">

    </head>
    
    <!--

    TABLE OF CONTENTS.
    
    Use search to find needed section.
    
    ===================================================================
    
    |  01. #CSS Links                |  all CSS links and file paths  |
    |  02. #FAVICONS                 |  Favicon links and file paths  |
    |  03. #GOOGLE FONT              |  Google font link              |
    |  04. #APP SCREEN / ICONS       |  app icons, screen backdrops   |
    |  05. #BODY                     |  body tag                      |
    |  06. #HEADER                   |  header tag                    |
    |  07. #PROJECTS                 |  project lists                 |
    |  08. #TOGGLE LAYOUT BUTTONS    |  layout buttons and actions    |
    |  09. #MOBILE                   |  mobile view dropdown          |
    |  10. #SEARCH                   |  search field                  |
    |  11. #NAVIGATION               |  left panel & navigation       |
    |  12. #RIGHT PANEL              |  right panel userlist          |
    |  13. #MAIN PANEL               |  main panel                    |
    |  14. #MAIN CONTENT             |  content holder                |
    |  15. #PAGE FOOTER              |  page footer                   |
    |  16. #SHORTCUT AREA            |  dropdown shortcuts area       |
    |  17. #PLUGINS                  |  all scripts and plugins       |
    
    ===================================================================
    
    -->
    
    <!-- #BODY -->
    <!-- Possible Classes

        * 'smart-style-{SKIN#}'
        * 'smart-rtl'         - Switch theme mode to RTL
        * 'menu-on-top'       - Switch to top navigation (no DOM change required)
        * 'no-menu'           - Hides the menu completely
        * 'hidden-menu'       - Hides the main menu but still accessable by hovering over left edge
        * 'fixed-header'      - Fixes the header
        * 'fixed-navigation'  - Fixes the main menu
        * 'fixed-ribbon'      - Fixes breadcrumb
        * 'fixed-page-footer' - Fixes footer
        * 'container'         - boxed layout mode (non-responsive: will not work with fixed-navigation & fixed-ribbon)
    -->
    <body class="">

        <!-- HEADER -->
        @include('layouts.partials.head')
        <!-- END HEADER -->

        @include('layouts.partials.leftsidebar')

        <!-- MAIN PANEL -->
        <div id="main" role="main">

            <!-- RIBBON -->
            <div id="ribbon">

                <span class="ribbon-button-alignment"> 
                    <span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
                        <i class="fa fa-refresh"></i>
                    </span> 
                </span>

                <!-- breadcrumb -->
                <ol class="breadcrumb">
                    <li>Home</li><li>Tables</li><li>Data Tables</li>
                </ol>
                <!-- end breadcrumb -->

                <!-- You can also add more buttons to the
                ribbon for further usability

                Example below:

                <span class="ribbon-button-alignment pull-right">
                <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
                <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
                <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
                </span> -->

            </div>
            <!-- END RIBBON -->

            <!-- MAIN CONTENT -->
            <div id="content">

                <div class="row">
                    <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                        <h1 class="page-title txt-color-blueDark">
                            <i class="fa fa-table fa-fw "></i> 
                                Table 
                            <span>> 
                                Data Tables
                            </span>
                        </h1>
                    </div>
                    
                </div>

            @if ($message = Session::get('created'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>{{ $message }}</p>
                </div>
                <script type="text/javascript">
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                    }, 5000);
                </script>
            @elseif ($message = Session::get('updated'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>{{ $message }}</p>
                </div>
                <script type="text/javascript">
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                    }, 4000);
                </script>
            @elseif ($message = Session::get('deleted'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <p>{{ $message }}</p>
                </div>
                <script type="text/javascript">
                    window.setTimeout(function() {
                        $(".alert").fadeTo(500, 0).slideUp(500, function(){
                            $(this).remove(); 
                        });
                    }, 4000);
                </script>
            @endif
                
                <!-- widget grid -->
                <section id="widget-grid" class="">
                
                    <!-- row -->
                    <div class="row">
                
                        <!-- NEW WIDGET START -->
                        <article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                
                            <!-- Widget ID (each widget will need unique ID)-->
                            <div class="jarviswidget jarviswidget-color-darken" id="wid-id-0" data-widget-editbutton="false">
                                <!-- widget options:
                                usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
                
                                data-widget-colorbutton="false"
                                data-widget-editbutton="false"
                                data-widget-togglebutton="false"
                                data-widget-deletebutton="false"
                                data-widget-fullscreenbutton="false"
                                data-widget-custombutton="false"
                                data-widget-collapsed="true"
                                data-widget-sortable="false"
                
                                -->
                                <header>
                                    <span class="widget-icon"> <i class="fa fa-table"></i> </span>
                                    <h2>Standard Data Tables </h2>
                
                                </header>
                
                                <!-- widget div-->
                                <div>
                
                                    <!-- widget edit box -->
                                    <div class="jarviswidget-editbox">
                                        <!-- This area used as dropdown edit box -->
                
                                    </div>
                                    <!-- end widget edit box -->
                
                                    <!-- widget content -->
                                    <div class="widget-body no-padding">
                                        <table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
                                            <thead>                         
                                                <tr>
                                                    <th data-hide="phone">ID</th>
                                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Category Name</th>
                                                    <th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i> Display Name</th>
                                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Created</th>
                                                    <th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar text-muted hidden-md hidden-sm hidden-xs"></i> Updated</th>
                                                    <th data-hide="" align="center">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($categories as $category)
                                                <tr>
                                                    <td>{{ $category->id }}</td>
                                                    <td>{{ $category->cate_name }}</td>
                                                    <td>{{ $category->display_name }}</td>
                                                    <td>{{ $category->created_at }}</td>
                                                    <td>{{ $category->updated_at }}</td>
                                                    <td align="center">
                                                        <a href="{{ url('categories/edit', $category->id) }}"><span><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span></a> | 
                                                        <a href="{{ url('categories/delete', $category->id) }}"><span><i class="fa fa-trash-o" aria-hidden="true"></i></span></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>

                                    </div>
                                    <!-- end widget content -->
                
                                </div>
                                <!-- end widget div -->
                
                            </div>
                            <!-- end widget -->
                
                        </article>
                        <!-- WIDGET END -->
                
                    </div>
                
                    <!-- end row -->
                
                    <!-- end row -->
                
                </section>
                <!-- end widget grid -->

            </div>
            <!-- END MAIN CONTENT -->

        </div>
        <!-- END MAIN PANEL -->

        <!-- PAGE FOOTER -->
        <div class="page-footer">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <span class="txt-color-white">SmartAdmin 1.8.2 <span class="hidden-xs"> - Web Application Framework</span> © 2014-2015</span>
                </div>

                <div class="col-xs-6 col-sm-6 text-right hidden-xs">
                    <div class="txt-color-white inline-block">
                        <i class="txt-color-blueLight hidden-mobile">Last account activity <i class="fa fa-clock-o"></i> <strong>52 mins ago &nbsp;</strong> </i>
                        <div class="btn-group dropup">
                            <button class="btn btn-xs dropdown-toggle bg-color-blue txt-color-white" data-toggle="dropdown">
                                <i class="fa fa-link"></i> <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu pull-right text-left">
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Download Progress</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 50%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Server Load</p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-success" style="width: 20%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <p class="txt-color-darken font-sm no-margin">Memory Load <span class="text-danger">*critical*</span></p>
                                        <div class="progress progress-micro no-margin">
                                            <div class="progress-bar progress-bar-danger" style="width: 70%;"></div>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="padding-5">
                                        <button class="btn btn-block btn-default">refresh</button>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END PAGE FOOTER -->

        <!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
        Note: These tiles are completely responsive,
        you can add as many as you like
        -->
        @include('layouts.partials.shortcut')
        <!-- END SHORTCUT AREA -->

        <!--================================================== -->

        <!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
        <script data-pace-options='{ "restartOnRequestAfter": true }' src="{{url('js/plugin/pace/pace.min.js')}}"></script>

        <!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            if (!window.jQuery) {
                document.write('<script src="{{url("js/libs/jquery-2.1.1.min.js")}}"><\/script>');
            }
        </script>

        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
        <script>
            if (!window.jQuery.ui) {
                document.write('<script src="{{url("js/libs/jquery-ui-1.10.3.min.js")}}"><\/script>');
            }
        </script>

        <!-- IMPORTANT: APP CONFIG -->
        <script src="{{url('js/app.config.js')}}"></script>

        <!-- JS TOUCH : include this plugin for mobile drag / drop touch events-->
        <script src="{{url('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js')}}"></script> 

        <!-- BOOTSTRAP JS -->
        <script src="{{url('js/bootstrap/bootstrap.min.js')}}"></script>

        <!-- CUSTOM NOTIFICATION -->
        <script src="{{url('js/notification/SmartNotification.min.js')}}"></script>

        <!-- JARVIS WIDGETS -->
        <script src="{{url('js/smartwidgets/jarvis.widget.min.js')}}"></script>

        <!-- EASY PIE CHARTS -->
        <script src="{{url('js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>

        <!-- SPARKLINES -->
        <script src="{{url('js/plugin/sparkline/jquery.sparkline.min.js')}}"></script>

        <!-- JQUERY VALIDATE -->
        <script src="{{url('js/plugin/jquery-validate/jquery.validate.min.js')}}"></script>

        <!-- JQUERY MASKED INPUT -->
        <script src="{{url('js/plugin/masked-input/jquery.maskedinput.min.js')}}"></script>

        <!-- JQUERY SELECT2 INPUT -->
        <script src="{{url('js/plugin/select2/select2.min.js')}}"></script>

        <!-- JQUERY UI + Bootstrap Slider -->
        <script src="{{url('js/plugin/bootstrap-slider/bootstrap-slider.min.js')}}"></script>

        <!-- browser msie issue fix -->
        <script src="{{url('js/plugin/msie-fix/jquery.mb.browser.min.js')}}"></script>

        <!-- FastClick: For mobile devices -->
        <script src="{{url('js/plugin/fastclick/fastclick.min.js')}}"></script>

        <!--[if IE 8]>

        <h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

        <![endif]-->

        <!-- Demo purpose only -->
        <script src="{{url('js/demo.min.js')}}"></script>

        <!-- MAIN APP JS FILE -->
        <script src="{{url('js/app.min.js')}}"></script>

        <!-- ENHANCEMENT PLUGINS : NOT A REQUIREMENT -->
        <!-- Voice command : plugin -->
        <script src="{{url('js/speech/voicecommand.min.js')}}"></script>

        <!-- SmartChat UI : plugin -->
        <script src="{{url('js/smart-chat-ui/smart.chat.ui.min.js')}}"></script>
        <script src="{{url('js/smart-chat-ui/smart.chat.manager.min.js')}}"></script>

        <!-- PAGE RELATED PLUGIN(S) -->
        <script src="{{url('js/plugin/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('js/plugin/datatables/dataTables.colVis.min.js')}}"></script>
        <script src="{{url('js/plugin/datatables/dataTables.tableTools.min.js')}}"></script>
        <script src="{{url('js/plugin/datatables/dataTables.bootstrap.min.js')}}"></script>
        <script src="{{url('js/plugin/datatable-responsive/datatables.responsive.min.js')}}"></script>

        <script type="text/javascript">
        
        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        
        $(document).ready(function() {
            
            pageSetUp();
            
            /* // DOM Position key index //
        
            l - Length changing (dropdown)
            f - Filtering input (search)
            t - The Table! (datatable)
            i - Information (records)
            p - Pagination (paging)
            r - pRocessing 
            < and > - div elements
            <"#id" and > - div with an id
            <"class" and > - div with a class
            <"#id.class" and > - div with an id and class
            
            Also see: http://legacy.datatables.net/usage/features
            */  
    
            /* BASIC ;*/
                var responsiveHelper_dt_basic = undefined;
                var responsiveHelper_datatable_fixed_column = undefined;
                var responsiveHelper_datatable_col_reorder = undefined;
                var responsiveHelper_datatable_tabletools = undefined;
                
                var breakpointDefinition = {
                    tablet : 1024,
                    phone : 480
                };
    
                $('#dt_basic').dataTable({
                    "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-12 hidden-xs'l>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                    "autoWidth" : true,
                    "oLanguage": {
                        "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                    },
                    "preDrawCallback" : function() {
                        // Initialize the responsive datatables helper once.
                        if (!responsiveHelper_dt_basic) {
                            responsiveHelper_dt_basic = new ResponsiveDatatablesHelper($('#dt_basic'), breakpointDefinition);
                        }
                    },
                    "rowCallback" : function(nRow) {
                        responsiveHelper_dt_basic.createExpandIcon(nRow);
                    },
                    "drawCallback" : function(oSettings) {
                        responsiveHelper_dt_basic.respond();
                    }
                });
    
            /* END BASIC */
            
            /* COLUMN FILTER  */
            var otable = $('#datatable_fixed_column').DataTable({
                //"bFilter": false,
                //"bInfo": false,
                //"bLengthChange": false
                //"bAutoWidth": false,
                //"bPaginate": false,
                //"bStateSave": true // saves sort state using localStorage
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
                "autoWidth" : true,
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_fixed_column) {
                        responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_fixed_column.respond();
                }       
            
            });
            
            // custom toolbar
            $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
                   
            // Apply the filter
            $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
                
                otable
                    .column( $(this).parent().index()+':visible' )
                    .search( this.value )
                    .draw();
                    
            } );
            /* END COLUMN FILTER */   
        
            /* COLUMN SHOW - HIDE */
            $('#datatable_col_reorder').dataTable({
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
                "autoWidth" : true,
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_col_reorder) {
                        responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_col_reorder.respond();
                }           
            });
            
            /* END COLUMN SHOW - HIDE */
    
            /* TABLETOOLS */
            $('#datatable_tabletools').dataTable({
                
                // Tabletools options: 
                //   https://datatables.net/extensions/tabletools/button_options
                "sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
                        "t"+
                        "<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
                "oLanguage": {
                    "sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
                },      
                "oTableTools": {
                     "aButtons": [
                     "copy",
                     "csv",
                     "xls",
                        {
                            "sExtends": "pdf",
                            "sTitle": "SmartAdmin_PDF",
                            "sPdfMessage": "SmartAdmin PDF Export",
                            "sPdfSize": "letter"
                        },
                        {
                            "sExtends": "print",
                            "sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
                        }
                     ],
                    "sSwfPath": "{{url('js/plugin/datatables/swf/copy_csv_xls_pdf.swf')}}"
                },
                "autoWidth" : true,
                "preDrawCallback" : function() {
                    // Initialize the responsive datatables helper once.
                    if (!responsiveHelper_datatable_tabletools) {
                        responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
                    }
                },
                "rowCallback" : function(nRow) {
                    responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
                },
                "drawCallback" : function(oSettings) {
                    responsiveHelper_datatable_tabletools.respond();
                }
            });
            
            /* END TABLETOOLS */
        
        })

        </script>

        <!-- Your GOOGLE ANALYTICS CODE Below -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
            _gaq.push(['_trackPageview']);
            
            (function() {
            var ga = document.createElement('script');
            ga.type = 'text/javascript';
            ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ga, s);
            })();
        </script>

    </body>

</html>