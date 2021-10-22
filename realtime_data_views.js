//Data will be display automatically
//Without Any Refreshing
////It will be processed in background
$(function() {
    setInterval(function() {
        $.ajax({
            type: "GET",
            url: "view.php",
            success: function(html) {
                 // html is a string of all output of the server script.
                $("#table_data").html(html);
           }
        });
    }, 2000);
    // Auto refresh in 2s
});