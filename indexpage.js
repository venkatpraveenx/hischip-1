$('#LogIn').click(function(){
	
    FB.login(function(response){
         userDetails = response;
      },{scope: 'user_location', return_scopes:true});
});

$('#CheckStatus').click(function(){
	
	FB.api('/me?fields=name,gender,birthday,email', function(response){
		
		
		
	
		
		
	})
});
