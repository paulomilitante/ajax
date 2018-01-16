


$(document).ready(function() {
    $('select').material_select();
}); /*Initialize Materialize*/

$(document).ready(function(){
    // the "href" attribute of the modal trigger must specify the modal ID that wants to be triggered
    $('.modal').modal();
  });


// Submit form automatically items.php

$('#username').keypress(function() {$('#wrongP').css('display','none')});
// Remove "Invalid Credentials" authenticate.php

var regPW, regCPW;

$('#regPW').keyup(function(){
	regPW = $(this).val();
	if (regPW != regCPW) {
		$('#dnMatch').show();
		$('#regBtn').attr('disabled','true');
	}
	else {
		$('#dnMatch').hide();
		$('#regBtn').removeAttr('disabled');
	}
});

$('#regCPW').keyup(function(){
	regCPW = $(this).val();
	if (regPW != regCPW) {
		$('#dnMatch').show();
		$('#regBtn').attr('disabled','true');
	}
	else {
		$('#dnMatch').hide();
		$('#regBtn').removeAttr('disabled');
	}
}) /*Confirm password register.php*/


// Render item modal Edit/Delete
$('.render_modal_body').click(function() {
	var index = $(this).data('index');
	$.post('render_modal_body_endpoint.php',
		{'index' : index },
		function(data){
			$("#modal-content").html(data);
		});
});

$('.render_modal_delete').click(function() {
	var index = $(this).data('index');
	$.post('render_modal_delete.php',
		{'index' : index },
		function(data){
			$("#modal-content2").html(data);
		});
});

