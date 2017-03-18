$('#LogIn').click(function(){
	
    FB.login(function(response){
         userDetails = response;
      },{scope: 'user_location', return_scopes:true});
});

$('#CheckStatus').click(function(){
	
	FB.api('/me?fields=name,gender,birthday,email', function(response){

		
		$("#Name").append(response.name);
		$("#Gender").append(response.gender);
		$("#DOB").append(response.birthday);
		$("#Email").append(response.email);
		
	})
});

