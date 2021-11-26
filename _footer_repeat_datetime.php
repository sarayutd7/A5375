<!-- Vendor -->
<script src="lib/vendor/jquery/jquery.js"></script>
<script src="lib/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
<script src="lib/vendor/bootstrap/js/bootstrap.js"></script>
<script src="lib/vendor/nanoscroller/nanoscroller.js"></script>
<script src="lib/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="lib/vendor/magnific-popup/magnific-popup.js"></script>
<script src="lib/vendor/jquery-placeholder/jquery.placeholder.js"></script>

<!-- Specific Page Vendor --> 
<script src="lib/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="lib/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="lib/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="lib/javascripts/theme.init.js"></script>


<!-- Examples -->
<script src="lib/javascripts/dashboard/examples.dashboard.js"></script>

<script src="lib/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
 <? if($_GET['task']=='findPID' || $_GET['task']=='findPID#' || $_GET['task']=='edit_pid'){ ?>
<script>
function check_age_regis(d,t){  
         var page = 'cal_age_regis.php'; 
        var param = "pid=<?=$_GET['pid']?>&date_coll="+ d +"&time_coll="+t;
        //alert(param);
           $.ajax({
                url: page,
                type: 'GET',
                dataType: 'json',
                data: param,
                success: function(response) {  
                    $('#age').val(response.year);
                }
            });
         
         } 
</script>
 <? } ?>

