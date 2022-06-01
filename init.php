<?php

global $notices;
$notices = array();

// Add your post message hook
define('HOOK', '');

require_once __DIR__ . '/vendor/autoload.php';

$settings = [
    'username'     => 'incoming-webhook',
    'channel'      => '#general',
    'reponse_type' => 'in_channel',
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
