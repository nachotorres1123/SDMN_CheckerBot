<?php

/*
|--------------------------------------------------------------------------
| Bot Token
|--------------------------------------------------------------------------
|
| Change this to your Bot API Token
| It can be obtained from https://telegram.dog/BotFather
|
*/
$config['botToken'] = "6687375790:AAFiNosM8x-RhB0GZQrE-9l9BjUBS-zKpSk";

/*
|--------------------------------------------------------------------------
| Admin User IDs
|--------------------------------------------------------------------------
|
| Change this to Admin's Numeric User IDs
| IDs can be obtained from https://telegram.dog/username_to_id_bot
|
*/
$config['adminIDs'] = ["6175765051", "6687375790"];

/*
|--------------------------------------------------------------------------
| Logs Channel ID
|--------------------------------------------------------------------------
|
| Create a New Channel/Group for logging data
| ID can be obtained from https://telegram.dog/BotFather
|
*/
$config['logsID'] = "1001908451090";

/*
|--------------------------------------------------------------------------
| Timezone
|--------------------------------------------------------------------------
|
| Current timezone for Logging Activities with time
| It can be obtained from http://1min.in/content/international/time-zones
| By Default, it's in IST
|
*/
$config['timeZone'] = "Asia/Kolkata";

/*
|--------------------------------------------------------------------------
| Database
|--------------------------------------------------------------------------
| Database to Store User Data
|
*/
$config['db']['hostname'] = "sql9.freesqldatabase.com";
$config['db']['username'] = "sql9639006";
$config['db']['password'] = "mGa7jjKVE9";
$config['db']['database'] = "checkerbot";

/*
|--------------------------------------------------------------------------
| Anti-Spam Timer
|--------------------------------------------------------------------------
|
| Anti-Spam Timer to prevent Spammers from Spamming the Checker
| Value is in Seconds. "20" = 20 seconds
|
*/
$config['anti_spam_timer'] = 20;

/*
|--------------------------------------------------------------------------
| SK Keys
|--------------------------------------------------------------------------
|
| SK Keys for !sm checker gate
| Add a Live SK Key here. You can Also add Multiple SK Keys
| Example: array('sk1', 'sk2', 'sk3')
|
*/
$config['sk_keys'] = ['sk_live_69GKI0saLB8uIEnxzv8VTvRX'];

?>
