<?php
$chat_id = $_GET['chat_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <title>Чат</title>
</head>
<body>
    <h1>Чат <?php echo $chat_id; ?></h1>
    <div id="chat-messages">
        <?php include('messages.php'); ?>
    </div>
    <form action="send_message.php" method="post">
        <input type="hidden" name="chat_id" value="<?php echo $chat_id; ?>">
        <input type="text" name="message" placeholder="Введите сообщение">
        <button type="submit">Отправить</button>
    </form>
</body>
</html>