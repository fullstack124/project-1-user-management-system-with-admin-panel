$(function() {
	'use strict';

  $('.form-control').on('input', function() {
	  var $field = $(this).closest('.form-group');
	  if (this.value) {
	    $field.addClass('field--not-empty');
	  } else {
	    $field.removeClass('field--not-empty');
	  }
	});

});

 
$("#admin_login").on('click', function (e) {
	e.preventDefault();

	const username = $("#username").val();
	const password = $("#password").val();

	if (!username || !password) {
		alert('Please fill the field');
	} else {
		$.ajax({
			url: '/php/admin/login.php',
			type: "POST",
			data: {
				username: username,
				password: password
			},
			success: (data) => { 
				if (data == 1) {
					alert("admin login successfully")
					$("#username").val('');
					$("#password").val('');
					window.location.href='/admin/dashboard.php';
				} else {
					$("#password").val('');
					alert("invalid username and password")
				}
			}
		})
	}
})