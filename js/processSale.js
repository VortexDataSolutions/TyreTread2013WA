/**
 * -----------------------AUTHOR CODE BEGINS HERE ----------------------
 *
 * @AUTHOR: SHAUN WATSON
 * @STUDENT ID: 1240153
 * @DATE CREATED: 29/10/2013
 * @DATE UPDATED: 29/10/2013
 * @VERSION: 0.0.0.1
 * @DESC: JAVASCRIPT TO DIRECT USER TO REQUIRED CONTROLLER WHEN A
 * SPECIFIC RADIO BUTTON HAS BEEN SELECTED
 * ---------------------------------------------------------------------
 */
function productSelection() {
    var selected = document.getElementsByName('product');

    for (var i = 0; i < selected.length; i++) {

        var value = selected[i].value;

        if (selected[i].checked) {
            if (value === 'tire') {
                window.location.href = 'tireController/tire';
                return true;

            } else if (value === 'rim') {
                window.location.href = 'rimController/rim';
                return true;

            } else {
                window.location.href = 'otherController/other';
                return true;
            }
        }
    }
    $('#alert').fadeIn('slow');
}

/**
 * ----------------AUTHOR:SHAUN WATSON CODE ENDS HERE ----------------------
 */