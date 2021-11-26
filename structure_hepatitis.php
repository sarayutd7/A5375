<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table Hepatitis</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="hiv" /></th>
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="ptid" value="ptid" checked="checked" />
                </td>
                <td class="text-info">ptid</td>
                <td class="text-info" style="cursor:pointer;">varchar</td>
                <td class="text-info small" style="cursor:pointer;">Participant ID</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="visit_code" /></td>
                <td class="text-info">visit_code</td>
                <td class="text-info" style="cursor:pointer;">varchar</td>
                <td class="text-info small" style="cursor:pointer;">Visit Number</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_coll" /></td>
                <td class="text-info">date_coll</td>
                <td class="text-info" style="cursor:pointer;">date</td>
                <td class="text-info small" style="cursor:pointer;">Date HIV RNA PCR Collected</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="time_coll" /></td>
                <td class="text-info">time_coll</td>
                <td class="text-info" style="cursor:pointer;">time</td>
                <td class="text-info small" style="cursor:pointer;">Time HIV RNA PCR Collected</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_received" /></td>
                <td class="text-info">date_received</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">date</span></td>
                <td class="text-info small" style="cursor:pointer;">Date HIV RNA PCR Received</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="time_received" /></td>
                <td class="text-info">time_received</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">time</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;">Time HIV RNA PCR Received</span></td>
            </tr>
            
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="hbs_ag" /></td>
                <td class="text-info">hbs_ag</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> </span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_hbs_ag" /></td>
                <td class="text-info">date_hbs_ag</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">date</span></td>
                <td class="text-info small" style="cursor:pointer;"> </td>
            </tr>
            
<!--
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="hbs_ab" /></td>
                <td class="text-info">hbs_ab</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;"></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_hbs_ab" /></td>
                <td class="text-info">date_hbs_ab</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;"></td>
            </tr>
            
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="hbc_ab" /></td>
                <td class="text-info">hbc_ab</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;"></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_hbc_ab" /></td>
                <td class="text-info">date_hbc_ab</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;"></td>
            </tr>
-->
            
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="anti_hcv" /></td>
                <td class="text-info">anti_hcv</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;">anti_hcv</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_anti_hcv" /></td>
                <td class="text-info">date_anti_hcv</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;">Date anti_hcv</td>
            </tr>
            
            
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="remark" /></td>
                <td class="text-info">remark</td>
                <td class="text-info" style="cursor:pointer;">text</td>
                <td class="text-info small" style="cursor:pointer;">Remark</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="who_record" /></td>
                <td class="text-info">who_record</td>
                <td class="text-info" style="cursor:pointer;">varchar</td>
                <td class="text-info small" style="cursor:pointer;">Recorder</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_record" /></td>
                <td class="text-info">date_record</td>
                <td class="text-info" style="cursor:pointer;">datetime</td>
                <td class="text-info small" style="cursor:pointer;">Record Date</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="who_edit_record" /></td>
                <td class="text-info">who_edit_record</td>
                <td class="text-info" style="cursor:pointer;">varchar</td>
                <td class="text-info small" style="cursor:pointer;">Editor</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_edit_record" /></td>
                <td class="text-info">date_edit_record</td>
                <td class="text-info" style="cursor:pointer;">datetime</td>
                <td class="text-info small" style="cursor:pointer;">Edit Date</td>
            </tr>
        </tbody>
    </table>
</div>