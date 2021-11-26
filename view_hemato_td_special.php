<tr>
    <td>&nbsp;</td>
    <td class="text-small">&nbsp;5a.<?=ucfirst('Neutrophils')?></td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Neutrophils')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Neutrophils'))?>_units">
            (%)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Neutrophils'))?>_nr">
            <?=getNormalRange('Neutrophils','Every')?></label>
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Neutrophils')),'_LLN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Neutrophils')),'_LLN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Neutrophils')),'Every','LLN')?>">
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Neutrophils')),'_ULN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Neutrophils')),'_ULN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Neutrophils')),'Every','ULN')?>">
    </td> 
                    
    <!-- Flag -->
    <td class="text-center">
        <?=remark_alert(current_data(strtolower(str_replace(' ','_',strtolower(str_replace(' ','_','Neutrophils')))),$_GET['recid']),getNumberNR(strtolower(str_replace(' ','_','Neutrophils')),'Every','LLN'),getNumberNR(strtolower(str_replace(' ','_','Neutrophils')),'Every','ULN'))?>
    </td>
    <!-- Flag -->
    
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Neutrophils'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Neutrophils'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Neutrophils'))?>_grade" name="<?=strtolower(str_replace(' ','_','Neutrophils'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Neutrophils'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="text-small">
        &nbsp;&nbsp;&nbsp;5a.1 <?=ucfirst('Absolute Neutrophils')?>
    </td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Absolute Neutrophils')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Absolute Neutrophils'))?>_units">
            (x10<sup>9</sup>/L)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Absolute Neutrophils'))?>_nr">
            <?=getNormalRange('Absolute Neutrophils','Every')?></label>
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Absolute Neutrophils')),'_LLN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Absolute Neutrophils')),'_LLN')?>" value="<?=getNumberNR('Absolute Neutrophils','Every','LLN')?>">
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Absolute Neutrophils')),'_ULN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Absolute Neutrophils')),'_ULN')?>" value="<?=getNumberNR('Absolute Neutrophils','Every','ULN')?>">
    </td>
    <!-- Flag -->
    <td class="text-center">
        <?=remark_alert(current_data(strtolower(str_replace(' ','_',strtolower(str_replace(' ','_','Absolute Neutrophils')))),$_GET['recid']),getNumberNR('Absolute Neutrophils','Every','LLN'),getNumberNR('Absolute Neutrophils','Every','ULN'))?>
    </td>
    <!-- Flag -->
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Absolute Neutrophils'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Absolute Neutrophils'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Absolute Neutrophils'))?>_grade" name="<?=strtolower(str_replace(' ','_','Absolute Neutrophils'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Absolute Neutrophils'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="text-small">
        &nbsp;5b.<?=ucfirst('Lymphocytes')?>
    </td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Lymphocytes')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>_units">
            (%)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>_nr">
            <?=getNormalRange('Lymphocytes','Every')?></label>
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Lymphocytes')),'_LLN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Lymphocytes')),'_LLN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Lymphocytes')),'Every','LLN')?>">
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Lymphocytes')),'_ULN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Lymphocytes')),'_ULN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Lymphocytes')),'Every','ULN')?>">
    </td>
    <!-- Flag -->
    <td class="text-center">
        <?=remark_alert(current_data(strtolower(str_replace(' ','_',strtolower(str_replace(' ','_','Lymphocytes')))),$_GET['recid']),getNumberNR(strtolower(str_replace(' ','_','Lymphocytes')),'Every','LLN'),getNumberNR(strtolower(str_replace(' ','_','Lymphocytes')),'Every','ULN'))?>
    </td>
    <!-- Flag -->

    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Lymphocytes'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>_grade" name="<?=strtolower(str_replace(' ','_','Lymphocytes'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Lymphocytes'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="text-small">
        &nbsp;5c.<?=ucfirst('Monocytes')?>
    </td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Monocytes')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Monocytes'))?>_units">
            (%)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Monocytes'))?>_nr">
            <?=getNormalRange('Monocytes','Every')?></label>
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Monocytes')),'_LLN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Monocytes')),'_LLN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Monocytes')),'Every','LLN')?>">
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Monocytes')),'_ULN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Monocytes')),'_ULN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Monocytes')),'Every','ULN')?>">
    </td>
    <!-- Flag -->
    <td class="text-center">
        <?=remark_alert(current_data(strtolower(str_replace(' ','_',strtolower(str_replace(' ','_','Monocytes')))),$_GET['recid']),getNumberNR(strtolower(str_replace(' ','_','Monocytes')),'Every','LLN'),getNumberNR(strtolower(str_replace(' ','_','Monocytes')),'Every','ULN'))?>
    </td>
    <!-- Flag -->
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Monocytes'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Monocytes'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Monocytes'))?>_grade" name="<?=strtolower(str_replace(' ','_','Monocytes'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Monocytes'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="text-small">
        &nbsp;5d.<?=ucfirst('Eosinophils')?>
    </td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Eosinophils')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Eosinophils'))?>_units">
            (%)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Eosinophils'))?>_nr">
            <?=getNormalRange('Eosinophils','Every')?></label>
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Eosinophils')),'_LLN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Eosinophils')),'_LLN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Eosinophils')),'Every','LLN')?>">
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Eosinophils')),'_ULN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Eosinophils')),'_ULN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Eosinophils')),'Every','ULN')?>">
    </td>
    <!-- Flag -->
    <td class="text-center">
        <?=remark_alert(current_data(strtolower(str_replace(' ','_',strtolower(str_replace(' ','_','Eosinophils')))),$_GET['recid']),getNumberNR(strtolower(str_replace(' ','_','Eosinophils')),'Every','LLN'),getNumberNR(strtolower(str_replace(' ','_','Eosinophils')),'Every','ULN'))?>
    </td>
    <!-- Flag -->

    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Eosinophils'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Eosinophils'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Eosinophils'))?>_grade" name="<?=strtolower(str_replace(' ','_','Eosinophils'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Eosinophils'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="text-small">
        &nbsp;5e.<?=ucfirst('Basophils')?>
    </td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Basophils')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Basophils'))?>_units">
            (%)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Basophils'))?>_nr">
            <?=getNormalRange('Basophils','Every')?></label>
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Basophils')),'_LLN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Basophils')),'_LLN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Basophils')),'Every','LLN')?>">
        <input type="hidden" id="<?=name_obj(strtolower(str_replace(' ','_','Basophils')),'_ULN')?>" name="<?=name_obj(strtolower(str_replace(' ','_','Basophils')),'_ULN')?>" value="<?=getNumberNR(strtolower(str_replace(' ','_','Basophils')),'Every','ULN')?>">
    </td>
    <!-- Flag -->
    <td class="text-center">
        <?=remark_alert(current_data(strtolower(str_replace(' ','_',strtolower(str_replace(' ','_','Basophils')))),$_GET['recid']),getNumberNR(strtolower(str_replace(' ','_','Basophils')),'Every','LLN'),getNumberNR(strtolower(str_replace(' ','_','Basophils')),'Every','ULN'))?>
    </td>
    <!-- Flag -->
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Basophils'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Basophils'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Basophils'))?>_grade" name="<?=strtolower(str_replace(' ','_','Basophils'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Basophils'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
<tr>
    <td>&nbsp;</td>
    <td class="text-small">
        &nbsp;5f.<?=ucfirst('Atypical Lymphocytes')?>
    </td>
    <td class="text-center"><?=current_data(strtolower(str_replace(' ','_','Atypical Lymphocytes')),$_GET['recid'])?></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Atypical Lymphocytes'))?>_units">
            (%)</label></td>
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Atypical Lymphocytes'))?>_nr">
            <?=getNormalRange('Atypical Lymphocytes','Every')?></label></td>
    <!-- Flag -->
    <td class="text-center">&nbsp;</td><!-- Flag -->
    <td class="text-center"><label id="<?=strtolower(str_replace(' ','_','Atypical Lymphocytes'))?>_label"><?=current_data(strtolower(str_replace(' ','_','Atypical Lymphocytes'."_gr")),$_GET['recid'])?></label>
        <input type="hidden" id="<?=strtolower(str_replace(' ','_','Atypical Lymphocytes'))?>_grade" name="<?=strtolower(str_replace(' ','_','Atypical Lymphocytes'))?>_grade" class="form-control text-center" value="<?=current_data(strtolower(str_replace(' ','_','Atypical Lymphocytes'."_gr")),$_GET['recid'])?>" /></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td> 
    <td>&nbsp;</td>
</tr>
