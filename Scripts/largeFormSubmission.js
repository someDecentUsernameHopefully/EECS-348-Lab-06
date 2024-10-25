let size = 0;

$(document).ready(function () {
    $(".size").change(function () {

        size = Number($(".size").val());

        if (size > 100) {
            $("#largeSizeWarn").show();
        } else {
            $("#largeSizeWarn").hide();
        }

    });

});