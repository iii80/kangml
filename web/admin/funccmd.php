<?php global $phpjiami_decrypt;$phpjiami_decrypt['��î����Ë����֯��������֔��å��']=base64_decode('c3RybGVu'); ?>
<?php
include(base64_decode('Li4vYXBpLmluYy5waHA='));if($islogin2==1){}else exit("<script language='javascript'>window.location.href='./login.php';</script>");function fas_service($cmd){$service_port =8989;$address ='127.0.0.1';$socket =socket_create(AF_INET, SOCK_STREAM, SOL_TCP);if ($socket === false){$status ="error";$msg ="socket_create() failed: reason: " . socket_strerror(socket_last_error()). "\n";}else{$result =socket_connect($socket, $address, $service_port);if($result === false){$status ="error";$msg ="socket_connect() failed.\nReason: ($result) " . socket_strerror(socket_last_error($socket)). "\n";}else {$in =$cmd;$status ="success";socket_write($socket, html_decode($in), $GLOBALS['phpjiami_decrypt']['��î����Ë����֯��������֔��å��']($in));$out =socket_read($socket, 8192);$msg =$out;}socket_close($socket);return [base64_decode('c3RhdHVz')=>$status,"msg"=>$msg];}}die(json_encode(fas_service($_POST["cmd"])));?>