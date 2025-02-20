<?php
$cookie_name = "duit_token";
$cookie_path = "/duit/"; // Must match the path used when setting the cookie
$cookie_domain = ""; // Leave empty for localhost or set for production (e.g., "10.105.48.20")

// Unset the cookie from the PHP superglobal array
unset($_COOKIE[$cookie_name]);

// Attempt to clear the cookie with various paths and domains
setcookie($cookie_name, "", time() - 3600, $cookie_path, $cookie_domain, false, true);
setcookie($cookie_name, "", time() - 3600, "/duit/", $cookie_domain, false, true);
setcookie($cookie_name, "", time() - 3600, "/", $cookie_domain, false, true);

// Try with and without domain
setcookie($cookie_name, "", time() - 3600, $cookie_path, "", false, true);
setcookie($cookie_name, "", time() - 3600, "/", "", false, true);

// Redirect to login page
header("Location: /duit/auth/main.php?page=login");
exit();
