<?php
$num = mt_rand(11111 , 99999);
$str = md5($num);

var_dump( $str );
echo "<br>";

var_dump( __FILE__ );
echo "<br>";

phpinfo();

