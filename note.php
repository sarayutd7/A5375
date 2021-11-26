   <!--<table class="table">
    <thead>
        <tr>
            <th class="text-center">Test name</th>
            <th class="text-center" width='100'>Value</th>
            <th class="text-center" width='150'>Units</th>
            <th class="text-center" width='250'>Normal range</th>
            <th class="text-center" width='100'>Grade</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Hemoglobin</td>
            <td><input name="hemoglobin_obj" type="text" class="form-control input-sm text-center" id="hemoglobin_obj" onchange="check_value('hemoglobin',this.value)" /></td>
            <td class="text-center"><label id="hemoglobin_units"></label></td>
            <td class="text-center"><label id="hemoglobin_nr"></label></td>
            <td class="text-center"><label id="hemoglobin_label"></label>
                <input type="hidden" id="hemoglobin_grade" name="hemoglobin_grade" class="form-control text-center" /></td>
        </tr>
        <tr>
            <td>Hematocrit</td>
            <td><input type="text" class="form-control" id="" name=""></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td>WBC</td>
            <td><input type="text" class="form-control" id="" name=""></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
        <tr>
            <td colspan="5"><strong>Differential Count</strong></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;6a. Neutrophils (%<sup></sup>)</td>
            <td><input name="neutrophils_obj" type="text" class="form-control input-sm text-center" id="neutrophils_obj" onchange="check_value('neutrophils',this.value,'obj_neutrophils')" /></td>
            <td class="text-center"></td>
            <td class="text-center">35 - 70</td>
            <td class="text-center">
                <label id="lb_neutrophils"></label>
                <input id="obj_neutrophils" name="obj_neutrophils" class="form-control text-center" type="hidden" /></td>

        </tr>
        <tr>
            <td>&nbsp;&nbsp;6a.1 absolute Neutrophils (x10<sup>9</sup>/L)</td>
            <td>
                <input id="obj_abso_neutrophils" name="obj_abso_neutrophils" class="form-control input-sm text-center small" onchange="check_value('absolute_neutrophils',this.value,'obj_absolute_neutrophils')"> </td>
            <td class="text-center"></td>
            <td class="text-center">1.981 - 6.435</td>
            <td class="text-center">
                <label id="lb_absolute_neutrophils"></label>
                <input id="obj_absolute_neutrophils" name="obj_absolute_neutrophils" class="form-control input-sm text-center small" type="hidden" /></td>

        </tr>
        <tr>
            <td>&nbsp;&nbsp;6b. Lymphocytes (%<sup></sup>)</td>
            <td><input name="lymphocytes_obj" type="text" class="form-control input-sm text-center" id="lymphocytes_obj" onchange="check_value('lymphocytes',this.value,'obj_lymphocytes')" /></td>
            <td class="text-center"></td>
            <td class="text-center">23 - 54</td>
            <td class="text-center">
                <label id="lb_lymphocytes"></label>
                <input id="obj_lymphocytes" name="obj_lymphocytes" class="form-control text-center" type="hidden" /></td>

        </tr>
        <tr>
            <td>&nbsp;&nbsp;6b.1 absolute Lymphocytes (x10<sup>9</sup>/L)</td>
            <td>
                <input id="obj_abso_lymphocytes" name="obj_abso_lymphocytes" class="form-control input-sm text-center small" onchange="check_value('absolute_lymphocytes',this.value,'obj_absolute_lymphocytes')" /></td>
            <td class="text-center"></td>
            <td class="text-center">1.348 - 3.595</td>
            <td class="text-center">
                <label id="lb_absolute_lymphocytes"> </label>
                <input id="obj_absolute_lymphocytes" name="obj_absolute_lymphocytes" class="form-control text-center" type="hidden" /></td>

        </tr>
        <tr>
            <td>&nbsp;&nbsp;6c. Monocytes (%<sup></sup>)</td>
            <td><input name="monocytes_obj" type="text" class="form-control input-sm text-center" id="monocytes_obj" onchange="check_value('monocytes',this.value,'obj_monocytes')" /></td>
            <td class="text-center"></td>
            <td class="text-center">4 - 11</td>
            <td class="text-center">
                <label id="lb_monocytes"></label>
                <input id="obj_monocytes" name="obj_monocytes" class="form-control text-center" type="hidden" /></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;6c.1 absolute Monocyte</td>
            <td><input id="obj_abso_monocytes" name="obj_abso_monocytes" class="form-control input-sm text-center small" onchange="check_value('abso_monocytes',this.value,'obj_absolute_monocyte')" /></td>
            <td class="text-center"></td>
            <td class="text-center">0.255 - 0.781</td>
            <td class="text-center"><label id="lb_absolute_monocyte">
                    <?=$result_hemato_o_data['abso_monocytes_gr']?>
                </label>
                <input id="obj_absolute_monocyte" name="obj_absolute_monocyte" class="form-control text-center" type="hidden" value="<?=$result_hemato_o_data['abso_monocytes_gr']?>" /></td>

        </tr>
        <tr>
            <td>&nbsp;&nbsp;6d. Eosinophils (%<sup></sup>)</td>
            <td><input name="eosinophils_obj" type="text" class="form-control input-sm text-center" id="eosinophils_obj" onchange="check_value('eosinophils',this.value,'obj_eosinophils')" /></td>
            <td class="text-center"></td>
            <td class="text-center">0 - 11</td>
            <td class="text-center">
                <label id="lb_eosinophils"></label>
                <input id="obj_eosinophils" name="obj_eosinophils" class="form-control text-center" type="hidden" /></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;6d.1 absolute Eosinophils</td>
            <td><input id="obj_abso_eosinophils" name="obj_abso_eosinophils" class="form-control input-sm text-center small" onchange="check_value('abso_eosinophils',this.value,'obj_abso_eosinophils_gr')" /></td>
            <td class="text-center"></td>
            <td class="text-center">0.028 - 1.108</td>
            <td class="text-center"><label id="lb_abso_eosinophils_gr">
                    <?=$result_hemato_o_data['abso_eosinophils_gr']?>
                </label>
                <input id="obj_abso_eosinophils_gr" name="obj_abso_eosinophils_gr" class="form-control text-center" type="hidden" value="<?=$result_hemato_o_data['abso_eosinophils_gr']?>" /></td>

        </tr>
        <tr>
            <td>&nbsp;&nbsp;6e. Basophils (%<sup></sup>)</td>
            <td><input name="basophils_obj" type="text" class="form-control input-sm text-center" id="basophils_obj" onchange="check_value('basophils',this.value,'obj_basophils')" /></td>
            <td class="text-center"></td>
            <td class="text-center">0 - 2</td>
            <td class="text-center">
                <label id="lb_basophils"></label>
                <input id="obj_basophils" name="obj_basophils" class="form-control text-center" type="hidden" /></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;6e.1 absolute Basophils</td>
            <td><input id="obj_abso_basophils" name="obj_abso_basophils" class="form-control input-sm text-center small" onchange="check_value('abso_basophils',this.value,'obj_absolute_basophils_gr')" /></td>
            <td class="text-center"></td>
            <td class="text-center">0.009 - 0.105</td>
            <td class="text-center"><label id="lb_absolute_basophils_gr">
                    <?=$result_hemato_o_data['abso_basophils_gr']?>
                </label>
                <input id="obj_absolute_basophils_gr" name="obj_absolute_basophils_gr" class="form-control text-center" type="hidden" value="<?=$result_hemato_o_data['abso_basophils_gr']?>" /></td>
        </tr>
        <tr>
            <td>&nbsp;&nbsp;6f. Atypical Lymphocytes (%<sup></sup>)</td>
            <td><input name="atypical_lymphocytes_obj" type="text" class="form-control input-sm text-center" id="atypical_lymphocytes_obj" /></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
            <td class="text-center"></td>
        </tr>
    </tbody>
</table>
-->