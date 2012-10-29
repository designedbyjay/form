$(function(){

	$('form').submit(function(event){
		
		var firstName = $('input:text[name=fname]').val();
		
		//alert(firstName.length);
		var limit = 2;
		if(firstName.length < limit ){
			//alert('First Name needs more characters');
			event.preventDefault();
			$('input:text[name=fname]').css('background','grey');

		/*if(email.length < limit ){
		alert('E-mail needs more characters');
		event.preventDefault();
		$('input:text[name=email]').css('background','grey');

*/
		}
		
		var stuff = $('input:checked[name=stuff]'); //get the input stuff
		var slength = stuff.length; //find out how many check boxes
		if(slength == 0){ //can't have none of two
		
			alert('Select Something!');
			event.preventDefault();
		} else if(slength==1){ //must be one of two
		
			//if(!confirm('fo\' real?')) event.preventDefault(); //confirm returns true or false
		
		} else if(slength==2){ //can't be two of two
		
			alert('No Cheating');
			event.preventDefault();
		}		
	
	});

});