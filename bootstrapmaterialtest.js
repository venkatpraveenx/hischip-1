var userDetails;
var mainDetails;

$('#loginButton').click(function(){
     FB.login(function(response){
          userDetails = response;
       });
  });
$('#logoutButton').click(function(){
     FB.logout(function(response){
          userDetails = response;
       });
  });
$('#details_status').click(function(){
     document.getElementById('detail').innerHTML =userDetails.status;
  });

$('#details_accessToken').click(function(){
     document.getElementById('detail').innerHTML =userDetails.authResponse.accessToken;
  });

$('#details_expiresIn').click(function(){
     document.getElementById('detail').innerHTML =userDetails.authResponse.expiresIn;
  });

$('#details_signedRequest').click(function(){
     document.getElementById('detail').innerHTML =userDetails.authResponse.signedRequest;
  });

$('#details_userID').click(function(){
     document.getElementById('detail').innerHTML =userDetails.authResponse.userID;
  });
$('#API_Calls').click(function(){
     FB.api('/me', function(response) {
        mainDetails = response;
        alert('Name is '+mainDetails.name+'\n ID is '+mainDetails.id);
     });
  });
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  



