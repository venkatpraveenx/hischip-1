<?php
  session_start();
  define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
  require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '1751632425141071',
  'app_secret' => 'bdf548374ab9ddadf4392319efd57831',
  'default_graph_version' => 'v2.2',
  ]);

  if(isset($_SESSION['facebook_access_token'])){
    header('Location:indexpage.php');
  }
    $helper = $fb->getRedirectLoginHelper();

  $permissions = ['user_friends'];
  $loginUrl = $helper->getLoginUrl('http://192.168.1.7/Codes/Intern/final/middlepage.php', $permissions);

?>

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
   
		   
		 });
		</script>


	<div id="full">
		<div id="middle">
			<div class="jumbotron" id="log">
				<h1>Welcome!</h1>
				<p>Please login via Facebook to continue</p>
				<p><a class="btn btn-primary btn-lg" href="<?php echo htmlspecialchars($loginUrl) ?>">Log in
					</a>
				</p>
			</div>
		</div>
	</div>



<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrapmaterialtest.js"></script>

</body>

</html>

