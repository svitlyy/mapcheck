<!doctype html>
<html>
<head>
    <title>Map from SVG</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
          integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin=""/>

    <link rel="stylesheet" href="/projects/map/css/L.switchBasemap.css"/>
    <link rel="stylesheet" href="/projects/map/css/comboTreePlugin.css"/>
    <link rel="stylesheet" href="/projects/map/css/leaflet.legend.css"/>
    <link rel="stylesheet" href="/projects/map/css/leaflet-sidebar.min.css">
    <link rel="stylesheet" href="/projects/map/css/custom.css">
    <link rel="stylesheet" href="/projects/map/css/leaflet.contextmenu.css">
    <script type="text/javascript" src="/projects/map/js/cookie.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.css"/>


</head>
<body>

<!-- optionally define the sidebar content via HTML markup -->
<div id="sidebar" class="leaflet-sidebar collapsed">

    <!-- nav tabs -->
    <div class="leaflet-sidebar-tabs">
        <!-- top aligned tabs -->
        <ul role="tablist">
            <?php
            if(isset($data['tab1']) && $data['tab1']==1) echo '<li><a href="#set1" role="tab"><i class="fa fa-cog"></i></a></li>';
            if(isset($data['tab2']) && $data['tab2']==1) echo '<li><a href="#set2" role="tab"><i class="fa fa-cog"></i></a></li>';
            if(isset($data['tab3']) && $data['tab3']==1) echo '<li><a href="#set3" role="tab"><i class="fa fa-cog"></i></a></li>';
            if(isset($data['tab4']) && $data['tab4']==1) echo '<li><a href="#set4" role="tab"><i class="fa fa-cog"></i></a></li>';
            if(isset($data['tab5']) && $data['tab5']==1) echo '<li><a href="#set5" role="tab"><i class="fa fa-cog"></i></a></li>';
            if(isset($data['tab6']) && $data['tab6']==1) echo '<li><a href="#set6" role="tab"><i class="fa fa-cog"></i></a></li>';
            ?>
        </ul>
    </div>
    <!-- panel content -->
    <div class="leaflet-sidebar-content">
<?php
        if(isset($data['tab1']) && $data['tab1']==1) {
     echo   '<div class="leaflet-sidebar-pane" id="set1">
            <h1 class="leaflet-sidebar-header">
                Резервне живлення будинків
                <span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
            </h1>
            <p>

            tab1

            </p>
        </div>';

        }
        if(isset($data['tab2']) && $data['tab2']==1) {
            echo '<div class="leaflet-sidebar-pane" id="set2">
            <h1 class="leaflet-sidebar-header">
                set2
                <span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
            </h1>
            set2
        </div>';
        }
if(isset($data['tab3']) && $data['tab3']==1) {
             echo '<div class="leaflet-sidebar-pane" id="set3">
            <h1 class="leaflet-sidebar-header">
                set3
                <span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
            </h1>
            set3
        </div>';
         }
if(isset($data['tab4']) && $data['tab4']==1) {
            echo ' <div class="leaflet-sidebar-pane" id="set4">
            <h1 class="leaflet-sidebar-header">
                set4
                <span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
            </h1>
            set4
        </div>';
        }
if(isset($data['tab5']) && $data['tab5']==1) {
     echo   '<div class="leaflet-sidebar-pane" id="set5">
            <h1 class="leaflet-sidebar-header">
                set5
                <span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
            </h1>
            set5
        </div>';
        }
if(isset($data['tab6']) && $data['tab6']==1) {
             echo   '<div class="leaflet-sidebar-pane" id="set6">
            <h1 class="leaflet-sidebar-header">
                set6
                <span class="leaflet-sidebar-close"><i class="fa fa-caret-left"></i></span>
            </h1>
            set6
        </div>';
}
?>
    </div>
</div>

<div id="map"></div>

<!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://unpkg.com/@geoman-io/leaflet-geoman-free@latest/dist/leaflet-geoman.min.js"></script>
<script src="/projects/map/js/L.switchBasemap.js"></script>
<script src="/projects/map/js/leaflet-sidebar.js"></script>
<script src="/projects/map/js/comboTreePlugin.js"></script>
<script src="/projects/map/js/leaflet.legend.js"></script>
<script src="/projects/map/js/L.LabelTextCollision.js"></script>
<script src="/projects/map/js/leaflet.contextmenu.js"></script>
<script>




    var map = new L.Map('map', {
        center: new L.LatLng(50.45523283192272, 30.63300487892172),
        zoom: 13,
        //preferCanvas: false,
        //renderer: labelTextCollision,
    });



    var osmeditLayer = L.layerGroup();
    map.addLayer(osmeditLayer);





    var sidebar = L.control.sidebar({container: 'sidebar'}).addTo(map)
    // be notified when a panel is opened
    sidebar.on('content', function (ev) {
        switch (ev.id) {
            case 'autopan':
                sidebar.options.autopan = true;
                break;
            default:
                sidebar.options.autopan = false;
        }
    });



    new L.basemapsSwitcher([
        {
            layer: L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map), //DEFAULT MAP
            icon: '/projects/map/assets/images/img1.PNG',
            name: 'DEFAULT MAP'
        },
        {
            layer: L.tileLayer('https://stamen-tiles-{s}.a.ssl.fastly.net/toner/{z}/{x}/{y}{r}.png', {
                attribution: 'Map tiles by <a href="https://stamen.com">Stamen Design</a>, <a href="http://creativecommons.org/licenses/by/3.0">CC BY 3.0</a> &mdash; Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'


            }),
            icon: '/projects/map/assets/images/img2.png',
            name: 'opentopomap2'
        },
        {
            layer: L.tileLayer('https://{s}.tile.opentopomap.org/{z}/{x}/{y}.png', {
                attribution: 'Map data: &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, <a href="http://viewfinderpanoramas.org">SRTM</a> | Map style: &copy; <a href="https://opentopomap.org">OpenTopoMap</a> (<a href="https://creativecommons.org/licenses/by-sa/3.0/">CC-BY-SA</a>)'
            }),
            icon: '/projects/map/assets/images/img4.png',
            name: 'opentopomap'
        },
        {
            layer: L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors &copy; <a href="https://carto.com/attributions">CARTO</a>'
            }),
            icon: '/projects/map/assets/images/img6.png',
            name: 'cartocdn'
        }

    ], {position: 'topright'}).addTo(map);



   /* if (this.checked === true) {
        load_items(this.id);
    }
    if (this.checked === false) {
        remove_items(this.id);
    }*/





</script>

<script type="text/javascript" src="/projects/map/js/jquery.cookie.js"></script>
</body>
</html>
