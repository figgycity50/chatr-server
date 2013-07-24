<?php
$username = $_POST["username"];
file_put_contents("messages.php",'&lt;' . $username . '>' . $_POST["chat"] . '<br>', FILE_APPEND);
header( 'Location: http://fig.no-ip.biz/chatr-server/online-client.php?username=' . $username ) ;
?>