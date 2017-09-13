<?php
/**
 * Created by PhpStorm.
 * User: HaiLong
 * Date: 9/1/2017
 * Time: 10:14 AM
 */?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>@yield('title')</title>
    <meta name="title" content="@yield('meta-title')"> <!--insert your title here-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="@yield('description')">
    <meta name="author" content="Hai Long">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=css?family=Robot%7cMaterial+Icons" rel="stylesheet" type='text/css'>

    <link rel="stylesheet" href="/resources/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/resources/assets/css/bootstrap-toggle.min.css">
    <link rel="stylesheet" href="/resources/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/resources/assets/css/bootstrap-formhelpers.min.css">
    <link rel="stylesheet" href="/resources/assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/resources/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="/resources/assets/css/themify-icons.css">
    <link rel="stylesheet" href="/resources/assets/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="/resources/assets/css/uploadfile.css">
    <link rel="stylesheet" href="/resources/assets/css/emoji.css">
    <link rel="stylesheet" href="/resources/assets/css/fullcalendar.min.css">
    <link rel="stylesheet" href="/resources/assets/css/lobipanel.min.css">
    <link rel="stylesheet" href="/resources/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="/resources/assets/css/flexslider.css">

    <!-- Material Design CSS -->
    <link rel="stylesheet" href="/resources/assets/css/bootstrap-material-design.min.css">
    <link rel="stylesheet" href="/resources/assets/css/ripples.min.css">
    <link rel="stylesheet" href="/resources/assets/css/mdb.min.css">

    <!-- Responsive Mobile Menu -->
    <link rel="stylesheet" href="/resources/assets/css/responsive-menu/jquery.accordion.css">
    <link rel="stylesheet" href="/resources/assets/css/vertical-menu.css">

    <!-- Data Table CSS -->
    <link rel="stylesheet" href="/resources/assets/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="/resources/assets/css/dataTables.bootstrap.css">
    <link rel="stylesheet" href="/resources/assets/css/select.dataTables.min.css">

    <!-- Vector-ammap CSS -->
    <link rel="stylesheet" href="/resources/assets/css/ammap.css">

    <link rel="stylesheet" href="/resources/assets/css/app.css">

    <link rel="stylesheet" href="/resources/assets/css/responsive.css">
    <link rel="stylesheet" href="/resources/assets/css/site.css">

    {{--favicon--}}
    <link rel="apple-touch-icon" sizes="57x57" href="/resources/assets/images/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/resources/assets/images/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/resources/assets/images/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/resources/assets/images/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/resources/assets/images/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/resources/assets/images/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/resources/assets/images/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/resources/assets/images/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/resources/assets/images/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/resources/assets/images/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/resources/assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/resources/assets/images/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/resources/assets/images/favicon-16x16.png">
    <link rel="manifest" href="/resources/assets/images/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/resources/assets/images/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
</head>
<body class="menu-expanded">
<!-- Web content -->

<!-- ! page content section-->
@section('page-content')
@show

<!-- End Web content -->

<script src="/resources/assets/js/jquery-3.2.1.min.js"></script>
<script src="/resources/assets/js/tether.min.js"></script>
<script src="/resources/assets/js/bootstrap.min.js"></script>
<script src="/resources/assets/js/bootstrap-toggle.min.js"></script>
<script src="/resources/assets/js/bootstrap-formhelpers.min.js"></script>
<script src="/resources/assets/js/bootstrap-formhelpers-languages.js"></script>
<script src="/resources/assets/js/mdb.min.js"></script>
<script src="/resources/assets/js/bootstrap-slider.min.js"></script>
<script src="/resources/assets/js/validator.min.js"></script>
<script src="/resources/assets/js/jquery.inputmask.bundle.min.js"></script>
<script src="/resources/assets/js/jquery-tree-view.js"></script>
<script src="/resources/assets/js/jquery.uploadfile.min.js"></script>
<script src="/resources/assets/js/jquery.slimscroll.min.js"></script>
<script src="/resources/assets/js/jquery.simpleWeather.min.js"></script>
<script src="/resources/assets/js/tinymce/tinymce.min.js"></script>
<script src="/resources/assets/js/fullcalendar/moment.min.js"></script>
<script src="/resources/assets/js/fullcalendar/fullcalendar.min.js"></script>
<script src="/resources/assets/js/jquery-ui.min.js"></script>
<script src="/resources/assets/js/lobipanel.min.js"></script>
<script type="text/javascript" src="/resources/assets/js/owl.carousel.js"></script>
<script type="text/javascript" src="/resources/assets/js/jquery.flexslider.js"></script>

<script src="/resources/assets/js/jquery.steps.min.js"></script>
<script src="/resources/assets/js/jquery.validate.min.js"></script>

<!-- Material-JS -->
<script src="/resources/assets/js/material.min.js"></script>
<script src="/resources/assets/js/ripples.min.js"></script>

<!-- Responsive Mobile Menu -->
<script src="/resources/assets/js/responsive-menu/jquery.accordion.js"></script>

<!-- Data-Table-JS -->
<script src="/resources/assets/js/datatable/jquery.dataTables.min.js"></script>
<script src="/resources/assets/js/datatable/dataTables.bootstrap.min.js"></script>
<script src="/resources/assets/js/datatable/dataTables.select.min.js"></script>
<script src="/resources/assets/js/datatable/dataTables.buttons.min.js"></script>
<script src="/resources/assets/js/datatable/buttons.flash.min.js"></script>
<script src="/resources/assets/js/datatable/jszip.min.js"></script>
<script src="/resources/assets/js/datatable/vfs_fonts.js"></script>
<script src="/resources/assets/js/datatable/buttons.html5.min.js"></script>
<script src="/resources/assets/js/datatable-custom.js"></script>

<!-- Chart-JS -->
<script src="/resources/assets/js/chart/Chart.bundle.min.js"></script>
<script src="/resources/assets/js/chart-custom.js"></script>

<!-- Counter-Up-JS -->
<script src="/resources/assets/js/jquery.waypoints.min.js"></script>
<script src="/resources/assets/js/jquery.counterup.min.js"></script>

<!-- Emoji-JS -->
<script src="/resources/assets/js/emoji/config.js"></script>
<script src="/resources/assets/js/emoji/util.js"></script>
<script src="/resources/assets/js/emoji/jquery.emojiarea.js"></script>
<script src="/resources/assets/js/emoji/emoji-picker.js"></script>

<!-- Vector-Map-Ammap-JS -->
<script src="/resources/assets/js/ammap/ammap.js"></script>
<script src="/resources/assets/js/ammap/worldLow.js"></script>
<script src="/resources/assets/js/ammap/black.js"></script>
<script src="/resources/assets/js/script.js"></script>

<script src="/resources/assets/js/custom.js"></script>
<script>
    AmCharts.theme = AmCharts.themes.black;
    AmCharts.ready(function(){
        var map = new AmCharts.AmMap();
        var dataProvider = {
            mapVar: AmCharts.maps.worldLow,
            getAreasFromMap:true,
            areas:[
                { "id": "AU", "color": "#ff7979" },
                { "id": "US", "color": "#83e9d2" },
                { "id": "RS", "color": "#83e9d2" },
                { "id": "RU", "color": "#83e9d2" },
                { "id": "CA", "color": "#ff7979" },
                { "id": "BR", "color": "#ffce2e" },
                { "id": "MX", "color": "#ffce2e" },
                { "id": "AR", "color": "#ffce2e" },
                { "id": "CO", "color": "#ffce2e" },
                { "id": "PE", "color": "#ffce2e" },
                { "id": "EC", "color": "#ffce2e" },
                { "id": "CU", "color": "#ffce2e" },
                { "id": "HA", "color": "#ffce2e" },
                { "id": "CL", "color": "#ffce2e" },
                { "id": "PY", "color": "#ffce2e" },
                { "id": "UY", "color": "#ffce2e" },
                { "id": "BO", "color": "#ffce2e" },
                { "id": "FK", "color": "#ffce2e" },
                { "id": "VE", "color": "#ffce2e" },
                { "id": "GT", "color": "#ffce2e" },
                { "id": "HN", "color": "#ffce2e" },
                { "id": "MX", "color": "#ffce2e" },
                { "id": "GY", "color": "#ffce2e" },
                { "id": "HT", "color": "#ffce2e" },
                { "id": "SR", "color": "#ffce2e" },
                { "id": "GF", "color": "#ffce2e" },
                { "id": "DO", "color": "#ffce2e" },
                { "id": "JM", "color": "#ffce2e" },
                { "id": "CR", "color": "#ffce2e" },
                { "id": "NI", "color": "#ffce2e" },
                { "id": "SV", "color": "#ffce2e" },
                { "id": "PA", "color": "#ffce2e" },
                { "id": "BZ", "color": "#ffce2e" },
                { "id": "SJ", "color": "#ffce2e" },
                { "id": "NO", "color": "#ffce2e" },
                { "id": "SE", "color": "#ffce2e" },
                { "id": "FI", "color": "#ffce2e" },
            ]
        };
        map.dataProvider = dataProvider;
        map.areasSettings ={
            autoZoom: true,
            rollOverBrightness:10,
            selectedBrightness:20,
            selectedColor: "#5eb7ff"
        };
        map.write("vectorWorldMap");
    });
</script>
</body>
</html>
