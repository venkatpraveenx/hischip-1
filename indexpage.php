<DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-widht, initial-scale=1">
	<!-- Material Design fonts -->
	  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700">
	  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/icon?family=Material+Icons">

	  <!-- Bootstrap -->
	  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	  <!-- Bootstrap Material Design -->
	  <link rel="stylesheet" type="text/css" href="https://raw.githubusercontent.com/FezVrasta/bootstrap-material-design/master/dist/css/bootstrap-material-design.css">
	  
	  <link rel="stylesheet" type="text/css" href="indexpage.css">
	  
</head>

<body>
	
	
	<script>
	  window.fbAsyncInit = function() {
	    FB.init({
	      appId      : '1751632425141071',
	      xfbml      : true,
	      version    : 'v2.8'
	    });
	    FB.AppEvents.logPageView();
	  };

	  (function(d, s, id){
	     var js, fjs = d.getElementsByTagName(s)[0];
	     if (d.getElementById(id)) {return;}
	     js = d.createElement(s); js.id = id;
	     js.src = "//connect.facebook.net/en_US/sdk.js";
	     fjs.parentNode.insertBefore(js, fjs);
	   }(document, 'script', 'facebook-jssdk'));
	   
	 
	</script>
	   
	   

	<div class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="javascript:void(0)">Site-Name</a>
	    </div>
	    <div class="navbar-collapse collapse navbar-responsive-collapse">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="javascript:void(0)">My Friends</a></li>
	      </ul>
	      
		  
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="javascript:void(0)">Log Out</a></li>
			
			<li id="LogIn"> <div class="fb-login-button" data-scope="email,user_birthday,user_hometown,user_location,user_website,user_work_history,user_about_me
			" data-max-rows="1" data-size="medium" data-show-faces="false" data-auto-logout-link="false">Login</div>
			
			<li id="CheckStatus"><a href="javascript:void(0)">Check Status</a></li>
			
	      </ul>
	    </div>
	  </div>
	</div>
	
	
	
	
	<div class="well">
		<div id="Name">Name: </div>
	
		<div id="Gender">Gender: </div>
	
		<div id="DOB">DOB: </div>
	
		<div id="Email">E-mail: </div>
	</div>
	

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="indexpage.js"></script>
</body>

</html>