<div id="code">
    <table width="100%" border="0" cellspacing="5" cellpadding="5" class="table table-bordered table-striped table-hover">
        <thead class="bg-success">
            <tr>
                <th colspan="4" class="text-center">Table Urine</th>
            </tr>
            <tr>
                <th class="text-center"><input type="checkbox" name="cbox_all" id="cbox_all" value="all" onClick="CheckAll(this);isChecked(this.checked)" />&nbsp;
                    <input name="tbname" id="tbname" type="hidden" value="urine" /></th>
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
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="color" /></td>
                <td class="text-info">color</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="appearance" /></td>
                <td class="text-info">appearance</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="specific_gravity" /></td>
                <td class="text-info">specific_gravity</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="ph" /></td>
                <td class="text-info">ph</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="protein" /></td>
                <td class="text-info">protein</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="glucose" /></td>
                <td class="text-info">glucose</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="kotone" /></td>
                <td class="text-info">kotone</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="blood" /></td>
                <td class="text-info">blood</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="bilirubin" /></td>
                <td class="text-info">bilirubin</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="urobilinogen" /></td>
                <td class="text-info">urobilinogen</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="nitrite" /></td>
                <td class="text-info">nitrite</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="leukocyte_esterase" /></td>
                <td class="text-info">leukocyte_esterase</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="wbc_hpf" /></td>
                <td class="text-info">wbc_hpf</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="rbc_hpf" /></td>
                <td class="text-info">rbc_hpf</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="crystal" /></td>
                <td class="text-info">crystal</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="cast" /></td>
                <td class="text-info">cast</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="epithelial_hpf" /></td>
                <td class="text-info">epithelial_hpf</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
            </tr>
            <tr style="cursor:pointer;">
                <td class="text-info text-center"><input type="checkbox" name="cbox[]" id="cbox[]" value="other" /></td>
                <td class="text-info">other</td>
                <td class="text-info" style="cursor:pointer;"><span class="text-info" style="cursor:pointer;">text</span></td>
                <td class="text-info small" style="cursor:pointer;"><span class="text-info small" style="cursor:pointer;"></span></td>
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