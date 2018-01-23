
$( document ).ready(function(){
	$(".dropdown-button").dropdown();
	
})
$( document ).ready(function(){
	$(".button-collapse").sideNav();
	
})

 $(document).ready(function() {
    $('select').material_select();
  });

  $(document).ready(function() {
    $('select').material_select();
  });

  // Modal
$(document).ready (function ($) {
    $(function () {

        //initialize all modals           
        $('.modal').modal();

        //now you can open modal from code
        // $('#modal1').modal('open');

        //or by click on trigger
        $('.trigger-modal').modal();

    }); // end of document ready
}); // end of jQuery name space

//render modal
// $(".render_modal").click(function(){
//       alert('working');
//     });

//Deleting Item
$('form').on('click', '#save', function(event){
  //remove list item from DOM
  $(this).parent().fadeOut(500, function(){
    $(this).remove();
  });
  // console.log($(this).parent().attr('id')); //retrive id of item to be deleted
  //ajax request to update JSON
  $.post('delete.php',
      { id: $(this).parent().attr('index')},
      function(data, status){
        // console.log(data);
      });
  event.stopPropagation();
});

$(document).ready(function() {
    $('select').material_select();
  });