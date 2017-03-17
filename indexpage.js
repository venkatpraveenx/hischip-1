$(document).ready(function(){
	
    FB.getLoginStatus(function(response){
    	
		if(response.status === 'connected'){
			alert('connected');
		}
		
		else{
			alert('Not Connected');
		}
    });
	
})