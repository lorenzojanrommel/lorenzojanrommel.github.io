<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>AJAX and JSON Example</title>
</head>
<body>
	<h2>Type Pikachu, Charmander or Squirtle</h2>
	<label for="pokemon">Pokemon Input:</label>
	<input type="text" name="pokemon" id="pokemon">
	<button id="myButton">Submit</button>
	<div id="jsonsection"></div>
	<div id="outputsection"></div>
	<hr>
	<button class="viewusers">View Users</button>
	<div id="userList"></div>
	<input type="text" name="" id="userName" placeholder="Enter name">
	<input type="text" name="" id="input2" placeholder="Enter password">
	<input type="submit" name="submit" id="validateUser" value="Validate User">

	<hr>
	<input type="text" name="nameInput" id="nameInput" placeholder="Name Input">
	<!-- <input type="submit" name="submit" id="validateUser" value="Search"> -->
	<p id="nameSuggested"></p>

	<script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#myButton').click(function(){
				var myInput = $('#pokemon').val();
				// console.log(myInput); for testing
				$.ajax({
					'url': 'assets/lib/server.php',
					'data' : {'pokemon' : myInput},
					'type' : 'GET',
					'success' : editHTML
				});
			});

		});

		function editHTML(jsonData){
			$('#jsonsection').html("Received: " + jsonData);
				//console.log(jsonData); //jsonData
			if (jsonData != "") {
				data = JSON.parse(jsonData);
				// console.log(data);
				htmlstr = "<hr>";
				htmlstr += "Name:" + data.name + "<br>";
				htmlstr += "Type:" + data.type + "<br>";
				htmlstr += "Basic Move:" + data.moves.basic + "<br>";
				htmlstr += "Special Move:" + data.moves.special + "<br>";

				$('#outputsection').html(htmlstr);
			}else{
				$('#outputsection').html("<hr> Pokemon info not found");
			};
		};

		// success, error --------common status(response)
		//

		$('.viewusers').click(function(){
				$.get('assets/lib/get.php', function(data, status){
					var user = JSON.parse(data);
					// console.log(user);
					for(var i = 0; i < user.length; i++){
						// console.log(user[i].name);
						// console.log(user[i].email);
						// console.log(user[i].password);
						var name = user[i].name;
						var email = user[i].email;
						var password = user[i].password;
						// console.log(email);
						newEntry = 
						'<strong> Name: </strong>' +name+ '<strong> Email: </strong>' +email+ '<strong> Password: </strong>' +password;

						$('#userList').append('<li>' +newEntry+ "</li>");
					};
					// console.log(user.name);
					// console.log(status);
					// console.log(JSON.parse(data));
				});
		});

		$('#validateUser').click(function(){
			var name = $('#userName').val();
			// console.log(name);

			$.post('assets/lib/post.php',
			{
				'name' : name
			}, function(data){
				console.log('Processed data: ' +data);
			});

		});

		$(document).ready(function(){
			$('#nameInput').keyup(function(){
				var name = $('#nameInput').val();
				// console.log(name);
				$.post('assets/lib/suggestion.php',
					{'suggestion' : name},
					function(data, status){
						// console.log(data);
						$('#nameSuggested').html(data);
					});
			});
		});

	</script>
</body>
</html>