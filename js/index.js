$(document).ready(function(){
	
	var menu = true;
	var url = "url(\"http://www.theevolutionarymind.com/wp-content/uploads/2016/09/healthcare.jpg\")";
	 var text2 = '<span class="glyphicon glyphicon-align-justify"></span> Menu';
	 var text1 = ' <span class="glyphicon glyphicon-remove-sign"></span> Close';

	$(".menu").on('click',function(){

		if(menu)
	    {
	    	$(".menu").html(text1);
	    	$(".switch").fadeIn(1000);
	    	
	    }
	    else
	    {
	    	$(".menu").html(text2);
	    	$(".switch").fadeOut(1000);
	    }

	     menu = !menu;
	});

	function a(){}
});