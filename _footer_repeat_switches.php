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
<script src="lib/vendor/select2/select2.js"></script>

<script src="lib/vendor/ios7-switch/ios7-switch.js"></script>

<!-- Theme Base, Components and Settings -->
<script src="lib/javascripts/theme.js"></script>

<!-- Theme Custom -->
<script src="lib/javascripts/theme.custom.js"></script>

<!-- Theme Initialization Files -->
<script src="lib/javascripts/theme.init.js"></script>


<!-- Examples -->
<script src="lib/javascripts/forms/examples.advanced.form.js" /></script>
<script>
    function approved(item) { 
        var urlpage = 'set_approved.php';
        var parma = 'uid=' + item;
        $.ajax({
                url: urlpage,
                type: 'GET',
                data: parma,
                dataType: 'HTML',
                success: function(data) { 
                    
                }
        });
    }
    function trashrd(item){
           var x = confirm("ต้องการลบ PID นี้ใช่หรือไหม");
              if(x == true){
                 var url = "delete_rd.php?p="+item;
                  window.location.href = url;
                   }
                  
              }   
</script>