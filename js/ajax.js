$('#name').blur(function() {
	name_js = $(this).val();
});

$('#email').blur(function() {
	email_js = $(this).val();
});

$('#comment').blur(function() {
	comment_js = $(this).val();
});

// $('form').submit(function(e) {
// 	e.preventDefault();
// });

$('input[value="Записать"]').click(function() {
	$.ajax({
		url: 'php/db_save.php',
		method: 'post',
		data: {
			name: name_js,
			email: email_js,
			comment: comment_js
		},
		success: function() {
			$('.comments').load('php/db_get.php');
		}
	});
	name_js = undefined;
	email_js = undefined;
	comment_js = undefined;
	$('#name, #email, #comment').val('');
});

$('input[value="Очистить комментарии"]').click(function() {
	$.ajax({
		url: 'php/db_clear.php',
		method: 'post',
		data: { clear: 1 },
		success: function() {
			$('.comments').load('php/db_get.php');
		}
	});
	clear = undefined;
});
