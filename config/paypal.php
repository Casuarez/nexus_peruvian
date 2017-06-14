
<?php

return array(
/** set your paypal credential **/
'client_id' =>'AaFIG0P42OuqkQTDT3l6MNSG6dseYvJXvdhf9lKXzLeP0RZXtG1WWkT1XRkV8r_q-q9mpXlXrXIj-m-X',
'secret' => 'EE2VJ8LDzix1N5LE1KpDxUoA2UE0KHbjvDGVV7CtumMULhqWoJdI_N6Ufk3F1DMbAIfiMnO4BrRkABlr',
/**
* SDK configuration 
*/
'settings' => array(
/**
* Available option 'sandbox' or 'live'
*/
'mode' => 'sandbox',
/**
* Specify the max request time in seconds
*/
'http.ConnectionTimeOut' => 1000,
/**
* Whether want to log to a file
*/
'log.LogEnabled' => true,
/**
* Specify the file that want to write on
*/
'log.FileName' => storage_path() . '/logs/paypal.log',
/**
* Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
*
* Logging is most verbose in the 'FINE' level and decreases as you
* proceed towards ERROR
*/
'log.LogLevel' => 'FINE'
),
);