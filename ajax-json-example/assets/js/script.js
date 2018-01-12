$(document).ready(function() {
	$('#myinput').keyup(test);
});

var test = function() {
	var myInput = $('#myinput').val();
	$.ajax({
		'url': 'assets/lib/server.php',
		'data': {'pokemon': myInput},
		'type': 'GET',
		'success': editHTML
	});
}

function editHTML(jsonData) {

	if (jsonData != '') {
		data = JSON.parse(jsonData);
		$('#jsonsection').html('<h5 class="center-align">' + data.name + '</h5>');
		htmlstr = '<hr><br>';
		htmlstr += "Name: " + data.name + "<br>";
		htmlstr += "Type: " + data.type + "<br>";
		htmlstr += "Basic Move: " + data.moves.basic + "<br>";
		htmlstr += "Advance Move: " + data.moves.special + "<br>";
		$('#outputsection').html("<div class='center-align'>"+ htmlstr + "</div>");
		$('#pokeIMG').attr('src',data.image);
		switch (data.name){
			case 'Pikachu':
				$('#mainBG').attr('class','yellow lighten-4')
				break;
			case 'Charmander':
				$('#mainBG').attr('class','orange lighten-4')
				break;
			case 'Squirtle':
				$('#mainBG').attr('class','blue lighten-4')
		}

	}
	else {
		$('#jsonsection').html('');
		$('#outputsection').html("<hr> <div class='center-align'>Pokemon info not found</div><hr>");
		$('#pokeIMG').removeAttr('src');
		$('#mainBG').removeAttr('class');
	}

};

$('#viewUsers').click(function() {
	$.get('assets/lib/get.php',function(data,status) {
		var users = JSON.parse(data);
		$('#userList').html('');
		for (var i = 0; i < users.length; i++) {
			var name = users[i].name;
			var email = users[i].email;
			var password = users[i].password;

			newEntry = '<strong>Name: </strong>' + name + '<br><strong> - Email: </strong>'
			+ email + '<br><strong> - Password: </strong>' + password;

			$('#userList').append('<br><hr><li>' + newEntry + '</li>');
		}	
	})
})

$('#validateUser').click(function() {
	var name = $('#userName').val();

	$.post('assets/lib/post.php',
		{'name': name},
		function(data) {
			console.log('Processed data: ' + data);
		});
});


$(document).ready(function() {
	$('#nameInput').keyup(function() {
		var name = $('#nameInput').val();

		$.post('assets/lib/name_suggestions.php',
			{'suggestion': name},
			function(data,status){
				$('#namesSuggested').html(data);
			});
	});
});