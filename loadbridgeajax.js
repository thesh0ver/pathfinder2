// $(document).ready(function(){
//     $('.button').click(function(){
//         //var clickBtnValue = $(this).val(); //callwritetable();
//         var ajaxurl = 'itinloader.php',
//         data =  {'action': 'callwritetable()'};
//         $.post(ajaxurl, data, function (response) {
//             // Response div goes here.
//             //alert("action performed successfully");
//         });
//     });
// });

// $('.button').click(function() {
//     $.ajax({
//       type: "POST",
//       url: "itinloader.php",
//       data: { name: "acti_load_form" }
//     }).done(function( msg ) {
//       alert( "Data Saved: " + msg );
//     });
//   });

function loadactidata(){
    $.ajax({
        type: "POST",
        url: "itinloader.php",
        data: {'action': 'callwritetable()'}
    }).done(( )=>{

    });
}