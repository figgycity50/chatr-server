<?php
$username = $_GET["username"]
?>
<div class="chat-interface">
<iframe style="height:95%; width:100%; border-style:none;" src="http://fig.no-ip.biz/chatr-server/messages.php"></iframe>
	<form method="POST" action="http://fig.no-ip.biz/chatr-server/chat.php">
    <input type="hidden" name="username" value="<?php echo $username ?>">
	<input type="text" style="position:absolute; width:100%; top:95%" name="chat">
	</form>
    </div>