<!DOCTYPE html>
<html>
<head>
<title>Pharmacy Assistant</title>
</head>

<body>

<h2>Pharmacy Chatbot</h2>

<form method="post">
<input type="text" name="msg" placeholder="Ask something">
<button type="submit">Send</button>
</form>

<?php

if(isset($_POST['msg'])){

$msg = strtolower($_POST['msg']);

if($msg=="hello"){
echo "Hello 👋 How can I help you?";
}
elseif($msg=="medicine"){
echo "You can check medicines in the medicine section.";
}
elseif($msg=="stock"){
echo "Check stock in inventory page.";
}
else{
echo "Sorry I don't understand.";
}

}

?>

</body>
</html>