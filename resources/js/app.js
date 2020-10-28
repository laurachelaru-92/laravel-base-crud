require('./bootstrap');
const $ = require( "jquery" );

$(document).ready(function(){
    
    $("#homepage-wrapper li.delete").click(function() {
        $(this).siblings(".confirm_delete").toggleClass("d-none");
    });

    $("#homepage-wrapper .delete_no").click(function() {
        $("#homepage-wrapper .confirm_delete").addClass("d-none");
    });
});