$(document).ready(function() {
    $("#registration_form").submit(function() {
        if ($("#reg_first_name").val() == "" || $("#reg_last_name").val() == "" || $("#reg_username").val() == "" || $("reg_password").val() == "") {
            alert('Please Complete all fields!');
            return false;
        }
    });
    $('.datepicker').pickadate({
        format:'yyyy/mm/dd',
        selectYears: true,
        selectMonths: true
    });
});
