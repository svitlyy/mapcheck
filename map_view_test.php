
    ..............
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
.................................................

</body>
</html>
