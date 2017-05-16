// Fechas
$(function () {
	$('#fecha_birth').datepicker();
});
$(function () {
	$('#fecha2').datepicker();
});

$(function () {
	$('#checkin_date').datepicker();
});
$(function () {
	$('#checkout_date').datepicker();
});

// Horas Basicas
$(function () {
	$('#hora_inicial').timepicker({
		minuteStep: 1, showMeridian: false, defaultTime: '00:00'
	});  
	$('#hora_final').timepicker({
		minuteStep: 1, showMeridian: false, defaultTime: '00:00'
	});  
});