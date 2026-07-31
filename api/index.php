<?php
echo "HELLO FROM VERCEL!";
exit;
ini_set('display_errors', 1);
error_reporting(E_ALL);

$envs = [
    'APP_CONFIG_CACHE' => '/tmp/config.php',
    'APP_EVENTS_CACHE' => '/tmp/events.php',
    'APP_PACKAGES_CACHE' => '/tmp/packages.php',
    'APP_ROUTES_CACHE' => '/tmp/routes.php',
    'APP_SERVICES_CACHE' => '/tmp/services.php',
    'VIEW_COMPILED_PATH' => '/tmp',
    'SESSION_DRIVER' => 'array',
    'LOG_CHANNEL' => 'stderr',
    'APP_DEBUG' => 'true',
    'APP_ENV' => 'local',
    'APP_KEY' => 'base64:nqF1cttaphq58rTlBri+iNefjLjDmxtBMqHkyFLC2aY=',
];

foreach ($envs as $k => $v) {
    putenv("$k=$v");
    $_ENV[$k] = $v;
    $_SERVER[$k] = $v;
}

require __DIR__ . '/../public/index.php';
