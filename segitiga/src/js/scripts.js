$(document).ready(function() {

    $("#form_segitiga").submit(function(e) {
        e.preventDefault();

        // ajax process
        $.ajax({
            type: "post", //form method
            url: $("#form_segitiga").attr('action'),
            data: $("#form_segitiga").serialize(),
            cache: false,
            dataType: "json",
            beforeSend: function() {
                // show progress bar
                $("#div_progress_bar").show();
            },
            success: function(result) {
                // progress bar hide
                $("#div_progress_bar").hide();
                if (result.status) {
                    var blkstr = $.map(result.content, function(val, index) {
                        var str = val;
                        return str;
                    }).join('\n');
                    $("#result").val(blkstr);
                    console.log(result);
                } else {
                    alert(result.content);
                }
            },
            error: function(xhr, Status, err) {
                // progress bar hide
                $("#div_progress_bar").hide();
                alert(Status);
            }
        });
    });
});