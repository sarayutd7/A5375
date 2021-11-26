<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table Syphilis</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="syphilis" /></th>
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
                <td class="text-info small" style="cursor:pointer;">Date Collected</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="time_coll" /></td>
                <td class="text-info">time_coll</td>
                <td class="text-info" style="cursor:pointer;">time</td>
                <td class="text-info small" style="cursor:pointer;">Time Collected</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_received" /></td>
                <td class="text-info">date_received</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">date</span></td>
                <td class="text-info small" style="cursor:pointer;">Date Received</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="time_received" /></td>
                <td class="text-info">time_received</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">time</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;">Time Received</span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="date_assayed" /></td>
                <td class="text-info">date_assayed</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">date</span></td>
                <td class="text-info small" style="cursor:pointer;">Date Assayed</td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="time_assayed" /></td>
                <td class="text-info">time_assayed</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">time</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;">Time Assayed</span></td>
            </tr>
            
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="rpr" /></td>
                <td class="text-info">rpr</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> </span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="rpr_value" /></td>
                <td class="text-info">rpr_value</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;">RPR Result</span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="daterpr" /></td>
                <td class="text-info">daterpr</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> Date RPR</span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="titerrpr" /></td>
                <td class="text-info">titerrpr</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> Titer RPR </span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="tppa" /></td>
                <td class="text-info">tppa</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> TPPA</span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="tppa_value" /></td>
                <td class="text-info">tppa_value</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> TPPA Result</span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="datetppa" /></td>
                <td class="text-info">datetppa</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"> date tppa  </span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="titertppa" /></td>
                <td class="text-info">titertppa</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;">titer tppa </span></td>
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