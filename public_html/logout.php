<?php
require 'auth0.php';

// Log the user out of the local app
$auth0->logout();

// Log the user out of our Auth0 tenant
header("Location: https://${auth0_domain}/v2/logout?client_id=${auth0_client_id}&returnTo=${auth0_logout_uri}");
