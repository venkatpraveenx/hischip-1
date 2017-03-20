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
        $_SESSION['facebook_access_token'] = (string)$accessToken;
      }

header('Location: indexpage.php'); 

?>