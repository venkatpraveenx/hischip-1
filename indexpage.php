<?php
  session_start();
  define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
  require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '1751632425141071',
  'app_secret' => 'bdf548374ab9ddadf4392319efd57831',
  'default_graph_version' => 'v2.2',
  ]);

   // GETTING THE ACCESS TOKEN' PROCESS
    $helper = $fb->getRedirectLoginHelper();
    try {
      $accessToken = $helper->getAccessToken();
    } catch(Facebook\Exceptions\FacebookResponseException $e) {
          echo 'Graph returned an error: ' . $e->getMessage();
      exit;
    } catch(Facebook\Exceptions\FacebookSDKException $e) {
          echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
    }

    //SETTING THE ACCESS TOKEN TO OUR LOCAL PAGE or WEBSITE
    if (isset($accessToken)) {
      $_SESSION['facebook_access_token'] = (string) $accessToken;
    }
      $fb->setDefaultAccessToken($_SESSION['facebook_access_token']);


      // retrieving data from fb part.
      try {
        $response = $fb->get('/me?fields=name,gender,birthday,email');
        $userNode = $response->getGraphUser();
      } catch(Facebook\Exceptions\FacebookResponseException $e) {
               echo 'Graph returned an error: ' . $e->getMessage();
        exit;
      } catch(Facebook\Exceptions\FacebookSDKException $e) {
               echo 'Facebook SDK returned an error: ' . $e->getMessage();
        exit;
      }

	  
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
		
		<div> 
			<div class="info">Name: </div><div id="Name" class="info">
                      <?php echo $userNode->getName(); ?>       
            </div>
		</div>
		
		<div>
			<div class="info">Gender: </div><div id="Gender" class="info">
                       <?php 
					   $graphObject = $response->getGraphObject();
					   echo $userNode= $graphObject->getProperty("gender");
					   
					   ?>    
            </div>
		</div>

		<div>
			<div class="info">DOB: </div><div id="DOB" class="info">
                     <?php 
				   $graphObject = $response->getGraphObject();
				   $userNode= $graphObject->getProperty("birthday");
				   echo date_format($userNode,'d-m-y');
				   ?>
            </div>
		</div>

		<div> 
			<div class="info">E-Mail: </div><div id="Email" class="info">
                    <?php 
				   $graphObject = $response->getGraphObject();
				   echo $userNode= $graphObject->getProperty("email");
				   
				   ?>       
            </div>
		</div>
	</div>
	
	
	<div id="detail"> </div>
	

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="indexpage.js"></script>
</body>

</html>