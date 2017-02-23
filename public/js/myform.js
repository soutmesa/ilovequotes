$(document).ready(function(){
	$('#datetimepicker').datetimepicker();
});

$(document).ready(function() {
  $('#example').DataTable();
});

$(document).off('click', 'button[value="create"]').on('click', 'button[value="create"]', function(){
	var userName = $('#userName').val();
	var firstName = $('#firstName').val();
	var lastName = $('#lastName').val();
	var email = $('#email').val();
	var password = $('#password').val();
	var confirmPassword = $('#confirmPassword').val();
	var datetimepicker = $('#datetimepicker').val();
	var placeOfBirth = $('#placeBirth').val();
	var gender = $('[name="gender"]:checked').val();
	var obj = {
		'userName': userName, 'firstName': firstName,
		'lastName': lastName, 'email': email,
		'password': password, 'dob': datetimepicker,
		'pob': placeOfBirth, 'gender': gender,
	};
	console.log(obj);
});