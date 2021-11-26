<script>
function cal_ab_lymphocyte(wbc,lym){
    var ab_lymphocyte = (wbc*lym)/100;
     
    
    cal_abs_cd4(ab_lymphocyte);
    cal_abs_cd8(ab_lymphocyte);
}
    function cal_abs_cd4(absLym){
        var tcell_cd4 = $('#t_cell_cd4').val();
        var abs_cd4 = (absLym*tcell_cd4)/100;
         
        $('#absolute_t_helper_cells').val(Math.round(abs_cd4));
    }

    function cal_abs_cd8(absLym){ 
        var tcell_cd8 = $('#t_cell_cd8').val();
        var abs_cd8 = (absLym*tcell_cd8)/100;
        
        $('#absolute_t_suppressor_cells').val(Math.round(abs_cd8));
        
    }
</script>