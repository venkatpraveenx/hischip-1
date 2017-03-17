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
	  
	  <link rel="stylesheet" type="text/css" href="styling.css">
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


		<div class="container-fluid" id="Test">
			<h1>columns</h1>
			<div class="col-md-4" style="background-color: #FF9999">Working?</div>
			<a href="#">This is a link</a>
		</div>

		<div class="container-fluid">
			<div class="col-md-4" id="Login">
				<p id="Welcome">Welcome!</p>
				<input id="loginButton" type="button" value="Login"></input>
				<input id="logoutButton" type="button" value="Logout"></input>
				
		</div>




<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrapmaterialtest.js"></script>

</body>

</html>