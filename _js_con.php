<script>
    function disblock(i, a, b) {
        if (i == true) {
            $('#' + a).prop('disabled', true);
            $('#' + b).prop('disabled', true);
        } else {
            $('#' + a).prop('disabled', false);
            $('#' + b).prop('disabled', false);
        }
    }

    function CheckAll() {
        var ml = document.tableform;
        var len = ml.elements.length;
        for (var i = 0; i < len; i++) {
            var e = ml.elements[i];
            if (e.name == "cbox[]") {
                Check(e);

            }
        }
    }

    function Check(e) {
        e.checked = true;
        //alert(e.checked);
        isChecked(e.checked);
    }

    function isChecked(isitchecked) {
        var ml = document.tableform;
        var len = ml.elements.length;
        //alert(isitchecked);
        if (isitchecked == true) {
            for (var i = 0; i < len; i++) {
                var e = ml.elements[i];
                if (isitchecked == true) {
                    e.name.value++;
                }
            }
        } else {
            $("form input:checkbox").attr("checked", false);

            document.tableform.ptid.checked = true;
        }



    }
</script>