<?php
/*
|--------------------------------------------------------------------------
| oAuth Config
|--------------------------------------------------------------------------
*/

$consumers = $_ENV['CONSUMERS'];

return array(
    'storage' => 'Session',
    'consumers' => $consumers,
);
