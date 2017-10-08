
<?php
// uses Google's http://goo.gl/ URL shortener
  /* Enter your url below */
  $url = "aroundtheweb.info";
  /* Function to get the short url */
  function get_short_url($url) {
    $ch = curl_init("http://goo.gl/api/url?url=" . urlencode($url));
    curl_setopt($ch, CURLOPT_POST      ,1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    if($result = curl_exec($ch))
    {
      $json = json_decode($result);
      if($error = ($json->error_message))
      {
        echo "$error";
        exit;
      }
      $short_url = $json->short_url;
      return "$short_url";
    } else
    {
      echo curl_error($ch);
    }
  }
  echo "Url: $url\n";
  echo "Shortened url by goo.gl: ".get_short_url($url);
 ?>