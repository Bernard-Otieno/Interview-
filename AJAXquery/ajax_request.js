

$(document).ready(function () {
    $.ajax({
        type: "GET",
        url: "data.php",                                //dummy code(using for testing)
        dataType: "html",
        success: function (data) {
            $("#data").html(data);

        }
    });
});