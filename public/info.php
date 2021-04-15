<?php

use \LeanCloud\Client;

var_dump( getenv("LEANCLOUD_APP_ID") );
echo "<br/>";

var_dump( getenv("LEANCLOUD_APP_MASTER_KEY") ); echo "<br/>";

var_dump( getenv("LEANCLOUD_APP_ENV") ); echo "<br/>";

var_dump( getenv("LEANCLOUD_API_SERVER") ); echo "<br/>";



// Client::initialize(
//     getenv("LEANCLOUD_APP_ID"),          // 从 LEANCLOUD_APP_ID 这个环境变量中获取应用 App ID 的值
//     getenv("LEANCLOUD_APP_KEY"),         // 从 LEANCLOUD_APP_KEY 这个环境变量中获取应用 App Key 的值
//     getenv("LEANCLOUD_APP_MASTER_KEY")   // 从 LEANCLOUD_APP_MASTER_KEY 这个环境变量中获取应用 Master Key 的值
// );

// 如果不希望使用 Master Key 权限，可以将下面一行删除
// Client::useMasterKey(true);

