<!-- Vendor -->
<script src="lib/vendor/jquery/jquery.js"></script>
<script src="lib/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="lib/vendor/bootstrap/js/bootstrap.js"></script>
<script src="lib/vendor/nanoscroller/nanoscroller.js"></script>
<script src="lib/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="lib/vendor/magnific-popup/magnific-popup.js"></script>
<script src="lib/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor -->
<script src="lib/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
<script src="lib/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
<script src="lib/vendor/jquery-appear/jquery.appear.js"></script>
<script src="lib/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
<script src="lib/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
<script src="lib/vendor/flot/jquery.flot.js"></script>
<script src="lib/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
<script src="lib/vendor/flot/jquery.flot.pie.js"></script>
<script src="lib/vendor/flot/jquery.flot.categories.js"></script>
<script src="lib/vendor/flot/jquery.flot.resize.js"></script>
<script src="lib/vendor/jquery-sparkline/jquery.sparkline.js"></script>
<script src="lib/vendor/raphael/raphael.js"></script>
<script src="lib/vendor/morris/morris.js"></script>
<script src="lib/vendor/gauge/gauge.js"></script>
<script src="lib/vendor/snap-svg/snap.svg.js"></script>
<script src="lib/vendor/liquid-meter/liquid.meter.js"></script>
<script src="lib/vendor/jqvmap/jquery.vmap.js"></script>
<script src="lib/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
<script src="lib/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="lib/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
<script src="lib/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
<script src="lib/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
<script src="lib/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
<script src="lib/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
<script src="lib/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="lib/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="lib/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="lib/javascripts/theme.init.js"></script>


<!-- Examples -->
<script src="lib/javascripts/dashboard/examples.dashboard.js"></script>

<? $task_check = explode('_',$_GET['task']);
if($task_check[0] == 'view'){ ?> 
<script>
    $(document).ready(function(){
        $(".form-control").prop( "disabled", true );
        $("input[type=radio]").prop( "disabled", true ); 
        $("input[type=checkbox]").prop( "disabled", true ); 
    })
</script>
<? } ?>


