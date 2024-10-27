$(document).ready(function () {

    $("button").click(function () {

        let val1 = $("#p1").val();
        let val2 = $("#p2").val();
        let valid = false;

        if (val1.length < 8) {
            alert("The first entered password is less than eight characters long!");
        } else if (val2.length < 8) {
            alert("The second entered password is less than eight characters long!");
        } else if (val1 != val2) {
            alert("The first and second passwords don't match!");
        } else {
            valid = true;
        }

        // Note that it only says to alert the user if the passwords are invalid.
        // I'd prefer to tell them by showing an html element.
        if (valid) {
            $(".valid").show();
        } else {
            $(".valid").hide();
        }

    });

});