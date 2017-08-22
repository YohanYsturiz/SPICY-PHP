      $('#dpStart').datetimepicker({
            pickDate: true,                 //en/disables the date picker
            pickTime: false,
            format: "DD-MM-YYYY",
            useMinutes: false,               //en/disables the minutes picker
            useSeconds: false
        });
        $('#dpEnd').datetimepicker({
            pickDate: true,                 //en/disables the date picker
            pickTime: false,
            format: "DD-MM-YYYY",
            useMinutes: false,               //en/disables the minutes picker
            useSeconds: false
        });

        $("#dpStart").on("dp.change", function(e) {
            alert('hey');
            $('#dpEnd').data("DateTimePicker").setMinDate(e.date);
        });
        $("#dpEnd").on("dp.change", function(e) {
            $('#dpStart').data("DateTimePicker").setMaxDate(e.date);
        });