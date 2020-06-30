<?php

require 'vendor/autoload.php';
require 'config.php';

use Auth0\SDK\Auth0;
$auth0 = new Auth0([
  'domain' => $auth0_domain,
  'client_id' => $auth0_client_id,
  'client_secret' => $auth0_client_secret,
  'redirect_uri' => $auth0_redirect_uri,
  'scope' => 'openid profile email',
]);