$(document).ready(function(){
		$('.nav a').filter(function(){return this.href==location.href}).parent().addClass('active').siblings().removeClass('active');
	});

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip(); 
});

$(function () {
	$('#datetimepicker1').datetimepicker({
		locale: 'nb',
		format: 'DD-MM-YYYY',
		widgetPositioning: {vertical: 'top',horizontal: 'right'},
		minDate: 'moment',
		showTodayButton: true
	});
});


