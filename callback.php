<?php
/*
╔═════════════════════════════════════════════╗
║             Design by LuaUyTin              ║
║      Facebook: facebook.com/luauytin        ║
║   Hotline: 0984.459.954 - 0899.91.31.91     ║ 
╚═════════════════════════════════════════════╝
*/
//lưu log
require_once(realpath($_SERVER["DOCUMENT_ROOT"]) .'/core/init.php');
require 'assets/ajax/site/config.php';

/*
$file = fopen("luauytin.txt",'a+') or die("lỗi");
$info= "trans_id : ".POST('trans_id')." | status: ".POST('status')." | message: ".POST('message')." | time: ".date('d-m-Y H:i:s')."\n________________________________________________";
fwrite($file,"".$info." \r\n\n");
fclose($file);
*/

	if(isset($_POST)) {
		if(isset($_POST['callback_sign'])) {
			$callback_sign = md5($partner_key.$_POST['code'].$_POST['serial']);
			if($_POST['callback_sign'] == $callback_sign) { //Xác thực API, tránh kẻ lạ gửi dữ liệu ảo.

				if(isset($_POST['status']) && $_POST['status'] != 99) {

###############################################################################################################################################################
$sql = "SELECT * FROM `history_card` WHERE `status` = '0' AND `trans_id` = '".POST('trans_id')."' LIMIT 1";
if($db->fetch_row($sql)){
$luauytin = $db->fetch_assoc($sql,1);
        if(POST('status') == 1){
            //lấy dữ liệu
            $id = $luauytin['id'];
            $iduser = $luauytin['username'];
            $cash_nhan = $luauytin['cash_nhan'];
            $notice = POST('message') ? POST('message'):'';
            //cập nhật data
            $db->query("UPDATE `history_card` SET `status` = '1',`notice` = '{$notice}' WHERE `status` = '0' AND `id` = '{$id}' LIMIT 1");
            $db->query("UPDATE `accounts` SET `cash` = `cash` + '{$cash_nhan}' WHERE `username` = '{$iduser}'");
            //top nạp
            if($cash_nhan > 0){
                if($db->fetch_row("SELECT COUNT(*) FROM `top_recharge` WHERE username = '{$iduser}'") > 0){
                    $db->query("UPDATE `top_recharge` SET `cash` = `cash` + '".$_POST['value']."' WHERE `username` = '{$iduser}'");}else{
                    $db->query("INSERT INTO `top_recharge` (username,name,cash) VALUES ('$iduser','".$luauytin['name']."','".$_POST['value']."')");}
            }
            
        }elseif(POST('status') != 99){
            $db->query("UPDATE `history_card` SET `status` = '2', `notice` = '".$db->real_escape_string($_POST['message'])."', `cash_nhan` = '0' WHERE `status` = '0' AND `id` = '".$luauytin['id']."' LIMIT 1");
        }
}
################################################################################################################################################################

				}
			}
		}
	}
	
	
        
?>