jQuery(document).ready(function ($) {
	$("#wp-version-message").after("<p>MySQL: <b style='color:green;'>" + dpvObj.mysqlVersion + "</b></p>");
	$("#wp-version-message").after("<p>PHP: <b style='color:green;'>" + dpvObj.phpVersion + "</b></p>");
});
