<?php

$toggler = new \eznio\toggler\Toggler();
$toggler
    ->setCachingStrategy(new \eznio\toggler\caching\MemcachedCachingStrategy('localhost', 6 * 60 * 60))
    ->loadFromUrl('https://my-app.net/ff.json')
    ->appendFromUrl('https://dev.my-app.net/ff.json')
    ->appendFromFile('/opt/myapp/config/ff.json')
    ->appendFromString(file_get_contents('/opt/myapp/config/dev/ff.json'))
    ->setGroup('users')
    ->setTime(microtime(true));


if ($toggler->isEnabled('MY-SUPER-FEATURE')) {
    echo 'Feature enabled';
}