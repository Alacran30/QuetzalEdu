$("#registro").click(function(){
	var username = $("#username").val();
	var email = $("#email").val();
	var password = $("#password").val();
	var tipo_id = 2;
	var route = "http://localhost:8000/users";
	var token = $("#token").val();

	$.ajax({
		url: route,
		headers: {'X-CSRF-TOKEN': token},
		type: 'POST',
		dataType: 'json',
		data:{username: username,
			  email:email,
			  password: password,
			  tipo_id: 2},

		success:function(){
			$("#msj-success").fadeIn();
		}
	});
});