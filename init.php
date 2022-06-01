<?php

global $notices;
$notices = array();

// Add your post message hook
define('HOOK', '');

// Add your channel
define('CHANNEL', '#general');

require_once __DIR__ . '/vendor/autoload.php';

$settings = [
    'username'     => 'incoming-webhook',
    'reponse_type' => 'in_channel',
    'channel'      => CHANNEL,
    'link_names'   => true
];

$client = new Maknz\Slack\Client(
    HOOK,
    $settings
);

if (isset($_REQUEST['message']) && $_REQUEST['message']) {
    $client->send($_REQUEST['message']);
    $notices[] = 'Message sent successfully';
}
