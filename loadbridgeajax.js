$(document).ready(function(){
    $('.button').click(function(){
        var clickBtnValue = $(this).val();
        var ajaxurl = 'itinloader.php',
        data =  {'action': clickBtnValue};
        $.post(ajaxurl, data, function (response) {
            // Response div goes here.
            alert("action performed successfully");
        });
    });
});