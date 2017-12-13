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
// youtube
// $(document).ready(function(){
// // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
// $('.modal-trigger').leanModal();
// });


// $(document).ready(function(){
//     var videos = $("video");

//     $('.modal-trigger').leanModal({
//         complete: function() {
//             videos.each(function(){
//                 this.pause();
//             });
//         }
//     });
// });

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