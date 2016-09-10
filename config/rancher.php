<?php
/*
| -----------------------------------------------------------------------------
| Rancher API Config Settings
| -----------------------------------------------------------------------------
|
*/
return [
    'baseUrl'	=> env('RANCHER_API_ENDPOINT'),
    'accessKey'	=> env('RACNHER_API_ACCESSKEY'),
    'secretKey' => env('RANCHER_API_SECRETKEY'),
];
