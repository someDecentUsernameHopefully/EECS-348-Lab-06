$(document).ready(function () {

    function getValue(formId) {
        let toReturn = $(formId).val();
        if (toReturn === "") {
            toReturn = 0;
        } else {
            toReturn = parseInt(toReturn);
        }
        return toReturn;
    }

    function cssRgbColor(red, green, blue) {
        return "rgb(" + red + ", " + green + ", " + blue + ")";
    }

    $("button").click(function () {

        let borderRed = getValue("#br");
        let borderGreen = getValue("#bg");
        let borderBlue = getValue("#bb");

        let borderWidth = getValue("#bw");

        let bgRed = getValue("#bar");
        let bgGreen = getValue("#bag");
        let bgBlue = getValue("#bab");

        $(".alter").css("border-color", cssRgbColor(borderRed, borderGreen, borderBlue));
        $(".alter").css("border-width", borderWidth);
        $(".alter").css("background-color", cssRgbColor(bgRed, bgGreen, bgBlue));

    });

});