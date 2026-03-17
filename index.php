<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Pharmacy Management - Login</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="bootstrap/js/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="shortcut icon" href="images/icon.svg" type="image/x-icon">
    <link rel="stylesheet" href="css/index.css">
    <script src="js/index.js"></script>
  </head>
  <body>
    <div class="container">
      <div class="card m-auto p-2">
        <div class="card-body">
          <form name="login-form" class="login-form" action="home.php" method="post" onsubmit="return validateCredentials();">
            <div class="logo">
        			<img src="images/prof.jpg" class="profile"/>
        			<h1 class="logo-caption"><span class="tweak">L</span>ogin</h1>
        		</div> <!-- logo class -->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-user text-white"></i></span>
              </div>
              <input name="username" type="text" class="form-control" placeholder="username" onkeyup="validate();" required>
            </div> <!--input-group class -->
            <div class="input-group form-group">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-key text-white"></i></span>
              </div>
              <input name="password" type="password" class="form-control" placeholder="password" onkeyup="validate();" required>
            </div> <!-- input-group class -->
            <div class="form-group">
              <button class="btn btn-default btn-block btn-custom">Login</button>
            </div>
          </form><!-- form close -->
        </div> <!-- cord-body class -->
        <div class="card-footer">
          <div class="text-center">
            <a class="text-light" href="#">Forgot password?</a>
          </div>
        </div> <!-- cord-footer class -->
      </div> <!-- card class -->
    </div> <!-- container class -->

    <style>
#chat-button{
position:fixed;
bottom:20px;
right:20px;
background:#28a745;
color:white;
border:none;
padding:15px;
border-radius:50%;
cursor:pointer;
}

#chat-box{
position:fixed;
bottom:80px;
right:20px;
width:300px;
height:350px;
background:white;
border:1px solid #ccc;
display:none;
flex-direction:column;
}

#messages{
height:280px;
overflow:auto;
padding:10px;
}
</style>

<button id="chat-button" onclick="toggleChat()">💬</button>

<div id="chat-box">

<div id="messages"></div>

<input id="msg" placeholder="Ask something..." style="width:70%">
<button onclick="sendMsg()">Send</button>

</div>

<script>

function toggleChat(){
let box=document.getElementById("chat-box");

if(box.style.display=="none"){
box.style.display="flex";
}else{
box.style.display="none";
}
}

function sendMsg(){

let msg=document.getElementById("msg").value;

fetch("chatbot.php",{
method:"POST",
headers:{
"Content-Type":"application/x-www-form-urlencoded"
},
body:"msg="+msg
})
.then(res=>res.text())
.then(data=>{

let messages=document.getElementById("messages");

messages.innerHTML += "<p><b>You:</b> "+msg+"</p>";
messages.innerHTML += "<p><b>Bot:</b> "+data+"</p>";

});

}

</script>
  </body>
</html>
