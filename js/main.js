
jQuery(document).on('submit', '#formlg', function (event) {
	event.preventDefault();

	jQuery.ajax({
		url: 'main_app/login.php',
		type: 'POST',
		dataType: 'json',
		data: $(this).serialize(),
		beforeSend: function () {
			$('.botonlg').val('Validando..');
		}
	})
		.done(function (respuesta) {
			console.log(respuesta);
			if (!respuesta.error) {
				if (respuesta.tipo == 'adrian_parodi') {
					location.href = 'main_app/adrian_parodi/';

				} 
				if (respuesta.tipo == 'adrian_parodi') {
					location.href = 'main_app/adrian_parodi/';

				}if (respuesta.tipo == 'alberto_sulllca_huaman') {
					location.href = 'main_app/alberto_sulllca_huaman/';

				}else if (respuesta.tipo == 'alejandro_huaman') {
					location.href = 'main_app/alejandro_huaman/';
				}
			} else {
				$('.error').slideDown('slow');
				setTimeout(function () {
					$('.error').slideUp('slow');
				}, 3000);
				$('.botonlg').val('Iniciar Sesion');
			}

		})
		.fail(function (resp) {
			console.log(resp.responseText);

		})
		.always(function () {
			console.log("complete");

		});
});


