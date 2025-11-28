/* English initialisation for the jQuery UI date picker plugin. */
/* Written by Apaella (apaella@gmail.com). */
jQuery(function($){
$.datepicker.regional['en'] = {
			closeText: 'Close',
			prevText: '&#x3c;Prev',
			nextText: 'Next&#x3e;',
			currentText: 'Today',
			monthNames: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
			monthNamesShort: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
			dayNames: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
			dayNamesShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
			dayNamesMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
			dateFormat: 'mm/dd/yy', firstDay: 1,
			isRTL: false};
	
	$.datepicker.setDefaults($.datepicker.regional['en']);
});	
