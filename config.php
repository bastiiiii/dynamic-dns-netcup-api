<?php
// Enter your netcup customer number here
define('CUSTOMERNR', '12345');

//Enter your API-Key and -Password here - you can generate them in your CCP at https://ccp.netcup.net
define('APIKEY', 'abcdefghijklmnopqrstuvwxyz');
define('APIPASSWORD', 'abcdefghijklmnopqrstuvwxyz');

// Enter Domain which should be used for dynamic DNS
define('DOMAIN', 'mydomain.com');
//Enter subdomain to be used for dynamic DNS, alternatively '@' for domain root or '*' for wildcard. If the record doesn't exist, the script will create it.
define('HOST', 'server');

//If set to true, this will change TTL to 300 seconds on every run if necessary.
define('CHANGE_TTL', true);

// Use netcup DNS REST-API
define('APIURL', 'https://ccp.netcup.net/run/webservice/servers/endpoint.php?JSON');
