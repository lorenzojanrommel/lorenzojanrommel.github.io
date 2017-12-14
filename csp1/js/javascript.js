/* button-collapse*/
$( document ).ready(function(){
	$(".button-collapse").sideNav();
})

/* video parallax */
$(document).ready(function(){
  	$('.parallax').parallax();
});

// character carousel
$(document).ready(function(){
  	$('.carousel').carousel();
});
// collapse
 $(document).ready(function(){
   	$('.collapsible').collapsible();
 });
// Modal
$(document).ready (function ($) {
    $(function () {

        //initialize all modals           
        $('.modal').modal();

        //now you can open modal from code
        $('#modal1').modal('open');

        //or by click on trigger
        $('.trigger-modal').modal();

    }); // end of document ready
}); // end of jQuery name space