<?php
/**
 * index
 */

$rNum = mt_rand(10000 , 999999);
$host = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'domain';


?><!DOCTYPE html>
<html>
  <head>
  	<meta charset="utf-8">
    <title><?php echo $host; ?></title>
    <link rel="icon" href="data:image/ico;base64,aWNv">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
    <style>html, body { height: 100%; } body { margin: 0; padding: 0; width: 100%; display: table; font-weight: 100; font-family: 'Lato'; } .container { text-align: center; display: table-cell; vertical-align: middle; } .content { text-align: center; display: inline-block; } .title { font-size: 4em; }.desc { font-size: 0.9em; }</style></head>
  <body>
    <div class="container">
      <div class="content">
        <div class="title"><?php echo $host; ?></div>
        <div class="desc">版权所有: lean</div>
        <div style="display:none"><?php echo $rNum; ?></div>
      </div>
    </div>
  </body>
</html>