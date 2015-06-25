<?php
require_once('class.curl.php');

$u='https://www.youtube.com/';
$c=new curl($u);
$c->ua('android');
$c->header(array(
"accept-encoding: gzip, deflate, sdch" ,
"accept-language: en-US,en;q=0.8,vi;q=0.6" ,
"x-chrome-uma-enabled: 1",
"accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8",
"cache-control: max-age=0",
"authority: www.youtube.com",
));
$c->post($postfields);
echo $c->run();
