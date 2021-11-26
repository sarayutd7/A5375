<table width="100%" border="0" celspacing='0' cellpadding=0>
    <tr>
        <td style="font-size:13px;">
        <? if($result_current_data['age']<18){ ?>
        <small>* Pediatric Normal Range for All IMPAACT Studies; Version 14 Nov 2018</small>
        <? }else{ ?>
        <small>* RIHES Adult reference range; Version 9.0 Date 08 Jan 2018</small>
        <? } ?> 
        </td>
        <td style="font-size:13px;"></td>
    </tr>
    <tr>
        <td colspan="2" style="font-size:13px;">
            <small>** Hi= Higher than reference range ,Lo=Lower than reference range</small>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-size:13px;">
            <label>
                <small>
                    *** Refer to DAIDS Toxicity Grading Corrected Version 2.1, July 2017 &nbsp;&nbsp;0= value is within normal limit (does not meet grading criteria for "grade 1-mild")
                </small>
            </label> 
        </td>
    </tr> 
    <tr>
        <td colspan="2" style="font-size:13px;">
            <label>
                <small>
                    **** CS=Clinical Significant. Select Y=Yes(The result is clinical significant) or N=No (The result is not clinical significant)
                </small>
            </label>
        </td>
    </tr>
</table>