<?php
/*
╔═════════════════════════════════════════════╗
║     Design by youtuber THI FF VLOG          ║
║      Facebook: facebook.com/ytbThiFF        ║
║   Hotline: 036.905.6756 - 0359.283.6756     ║
╚═════════════════════════════════════════════╝
*/
 
// Require database & thông tin chung
require_once 'core/init.php';
 
// Xoá session
$session->destroy();
new Redirect($_DOMAIN); // Trở về trang index
 
?>