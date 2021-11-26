<? include('_head_repeat_datetime.php'); include('_footer_repeat_datetime.php'); ?>
<script>


    function age(item){ 
        var mdate = item.toString();
        var yearThen = parseInt(mdate.substring(6,10), 10);
        var monthThen = parseInt(mdate.substring(3,6), 10);
        var dayThen = parseInt(mdate.substring(0,2), 10);
        //alert(monthThen);
        var today = new Date();
        var birthday = new Date(yearThen, monthThen-1, dayThen);
        
        var differenceInMilisecond = today.valueOf() - birthday.valueOf();
        //alert(today);
        
        var year_age = Math.floor(differenceInMilisecond / 31536000000);
        var day_age = Math.floor((differenceInMilisecond % 31536000000) / 86400000);
        var hour = Math.floor((differenceInMilisecond % 31536000000) / 86400000 / 3600);
        
//        if ((today.getMonth() == birthday.getMonth()) && (today.getDate() == birthday.getDate())) {
//            alert("Happy B'day!!!");
//        }
        
        var month_age = Math.floor(day_age/30);
        
        day_age = day_age % 30;
        
        if (isNaN(year_age) || isNaN(month_age) || isNaN(day_age)) {
            $("#exact_age").text("Invalid birthday - Please try again!");
        }
        else {
            $("#exact_age").html("You are<br/><div id=\"age\"><span>" + year_age + "</span> years <span>" + month_age + "</span> months <span>" + day_age + "</span> days <span>"+ hour +" </span> hour old</div> ");
        }
                      }
     
</script>
<div class="row">
    <div class="col-lg-12 col-sm-12">
        <div class="col-lg-3 col-sm-2 text-right">
            <span>DOB (dd/MMM/yy) :</span>
        </div>
        <div class="col-lg-3 col-sm-4">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                </span>
                <input type="text" class="form-control" id="dob" name="dob" data-plugin-datepicker>
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group">
                <span class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                </span>
                <input type="text" data-plugin-timepicker="" class="form-control">
            </div>
        </div>
        <p id="exact_age"></p>
    </div>