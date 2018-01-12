


$(document).ready(function() {
    $('select').material_select();
}); /*Initialize Materialize*/


// Submit form automatically items.php

$('#username').keypress(function() {$('#wrongP').css('display','none')});
// Remove "Invalid Credentials" authenticate.php


var regPW, regCPW;

$('#regPW').blur(function(){
	regPW = $(this).val();});

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
