<?php
  session_start();
  define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
  require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '1751632425141071',
  'app_secret' => 'bdf548374ab9ddadf4392319efd57831',
  'default_graph_version' => 'v2.2',
  'cookie' => true,
  'status' => true,
  ]);
  
  if($_SESSION['facebook_access_token']){
       $fb->setDefaultAccessToken((string)$_SESSION['facebook_access_token']);
  }else{
        header('Location: fb.php');
  }

 

?>

<p>This is my friends php page with previous session carried forward</p>