<?php
  session_start();
  define('FACEBOOK_SDK_V4_SRC_DIR', __DIR__ . '/facebook-sdk-v5/');
  require_once __DIR__ . '/facebook-sdk-v5/autoload.php';

  $fb = new Facebook\Facebook([
  'app_id' => '1751632425141071',
  'app_secret' => 'bdf548374ab9ddadf4392319efd57831',
  'default_graph_version' => 'v2.2',
  ]);

  //killing session
  session_unset();
  session_destroy();
?>
<html>
<body>
 
      <p> You have been successfully logged out !</p>
      <br>
      <br>
      <p> Please <a href="fb.php">click here</a> to login again</p>

</body>