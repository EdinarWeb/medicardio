$(document).ready(function () {
	$('#busqueda').keyup(function () {
		var resultado = new RegExp($(this).val());
		$('.busquedatabla tr').hide();
		$('.busquedatabla tr').filter(function () {
			return resultado.test($(this).text());
		}).show();
	})
});