$(document).ready(function() {
	//hide empty data table
	//It will be shown after clicking Search button
    document.getElementById("show").style.display="none";
});
$('#addweather-button').click(function(){
   if($.trim($('#cityInput').val()) == ''){
      alert('City Not Found!');
   }
});