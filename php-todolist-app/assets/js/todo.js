// Check off specific to dos by clicking

// completing task
$('ul').on('click', 'li', function(){
	$(this).toggleClass('completed');

	$.post('done.php',
		{ id: $(this).attr('id')},
		function(data, status){

		});
});

//creating new task
$('#addNewTask').keypress(function(event){
	// console.log(event.which);
	if(event.which == 13){ // user pressed enter key
	var todoText = $(this).val();
	$(this).val(''); //delete text from input
	// console.log(todoText);
	$.post('create.php',
			{ task: todoText},
			function(data, status){
				// console.log(data);
			$('ul').append('<li id="' +data+'"><span><i class="fa fa-trash"></i></span> '+todoText+ '</li>');
			});
	};
});

//Deleting Task
$('ul').on('click', 'span', function(event){
	//remove list item from DOM
	$(this).parent().fadeOut(500, function(){
		$(this).remove();
	});
	// console.log($(this).parent().attr('id')); //retrive id of item to be deleted
	//ajax request to update JSON
	$.post('delete.php',
			{ id: $(this).parent().attr('id')},
			function(data, status){
				// console.log(data);
			});
	event.stopPropagation();
});


// $(document).ready(function(){
//     $("li").click(function(){
//         $(".fa-trash").animate({
//             width: "toggle"
//         });
//     });
// });
// $('li').click(function() {
//     $(this).toggle('slide');
// })


// $(document).ready(function(){
// 	$('li').children().hide();

// 	$('li').mouseenter(function(){
// 	$(this).children().show();
// 	})
// 	$('li').mouseleave(function(){
// 	$(this).children().hide();
// 	})
// })

//  $('.fa-trash').hide();

// $('li').click(function(e){

//     e.preventDefault();
//     // hide all span
//     var $this = $(this).parent().find('.fa-trash');
//     $(".fa").not($this).hide();

//     // here is what I want to do
//     $this.toggle();

// });