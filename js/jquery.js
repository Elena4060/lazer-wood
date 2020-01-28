$(document).ready(function(){
	$('.menu-button').on('click', function () {
		$('.menu').toggleClass('menu_active');
	});

	$('.menu__link').on('click', function () {
		$('.menu').toggleClass('menu_active');
	})

	$('#submit').click(function() {
		var name = $('#name').val();
		var phone = $('#phone').val();

		var varData = 'Имя' + name + ' Телефон:' + phone;
		console.log(varData);
		$.ajax({
			type:'POST',
			url:'mail.php',
			data: varData,
			success: function(){
				alert ("Спасибо!");
			}
		});

	});
});	
