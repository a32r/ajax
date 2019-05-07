$('#name').blur(function() {
	name_js = $(this).val();
});

$('#email').blur(function() {
	email_js = $(this).val();
});

$('#comment').blur(function() {
	comment_js = $(this).val();
});

if(typeof(name_js) != "undefined")
	data = {
		name: name_js,
		email: email_js,
		comment: comment_js
	}

$('form[id=form]').submit(function(e) {
	e.preventDefault();
});

$('input[value="Записать"]').click(function() {
	if(typeof(data) != "undefined")
		$.ajax({
			url: 'php/db_save.php',
			method: 'post',
			data: data
		});
});
