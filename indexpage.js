$('#LogIn').click(function(){
	
    FB.login(function(response){
         userDetails = response;
      },{scope: 'user_location', return_scopes:true});
});

$('#CheckStatus').click(function(){
	
	FB.api('/me?fields=name,gender,birthday,email', function(response){
		
		
		document.getElementById('Name').innerHTML = response.name;
		document.getElementById('Gender').innerHTML = response.gender;
		document.getElementById('DOB').innerHTML = response.birthday;
		document.getElementById('Email').innerHTML = response.email;
	})
});

