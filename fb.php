<?php
  session_start();
  define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
  require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '1751632425141071',
  'app_secret' => 'bdf548374ab9ddadf4392319efd57831',
  'default_graph_version' => 'v2.2',
  ]);

  $helper = $fb->getRedirectLoginHelper();

  $permissions = ['email','user_birthday',];
  $loginUrl = $helper->getLoginUrl('http://localhost/hischip-1-branch2/indexpage.php', $permissions);



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



		<div class="container-fluid" id="Test">
			<h1>columns</h1>
			<div class="col-md-4" style="background-color: #FF9999">Working?</div>
			<a href="#">This is a link</a>
		</div>

		<div class="container-fluid">
			<div class="col-md-4" id="Login">
				<p id="Welcome">Welcome!</p>
<?php
    echo '<a href="' . htmlspecialchars($loginUrl) . '"><input id="loginButton" type="button" value="Login"></input></a>';
?>
		</div>




<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="bootstrapmaterialtest.js"></script>

</body>

</html>

