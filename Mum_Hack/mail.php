<<<<<<< HEAD
<?php
$to = "2015inderjeet.saluja@ves.ac.in";
$subject = "Hi!";
$body = "Hi,\n\nHow are you?";
$headers = "From: inderjeet.saluja97@gmail.com\r\n"; 
if (mail($to, $subject, $body, $headers)) {
echo("<p>Email successfully sent!</p>");
} else {
echo("<p>Email delivery failed…</p>");
}
?>
=======
<html>
<style>
body {
  font-family: arial;
  font-size: 12px;
  color: #666;
}
form {
  width: 500px;
  background: white;
  padding: 20px 25px;
  margin: auto;
  margin-top: 30px;
  box-shadow: 0px 1px 2px rgba(0,0,0,0.2);
}
form input,
form textarea {
  font: inherit;
  padding: 5px 5px;
  width: 100%;
  margin-top: 3px;
  margin-bottom: 15px;
  box-sizing: border-box;
}
form button {
  border: 1px solid rgba(0,0,0,0.2);
  padding: 8px 35px;
  font-size: 12px;
  background: #888;
  color: white;
}
form label {
  color: #777;
  font-size: 11px;
  margin-bottom: 2px;
  display: block;
}
</style>
<body>
<form id="myform">
<label>reply_to</label>
<input type="text" name="reply_to" />
<label>from_name</label>
<input type="text" name="from_name" />
<label>to_name</label>
<input type="text" name="to_name" />
<label>message_html</label>
<input type="text" name="message_html" />
<br><br>
<button>
Send
</button>

<button onclick="document.location.href='admin.php'">
BACK
</button>
</form>

<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript" src="https://cdn.emailjs.com/dist/email.min.js"></script>
<script type="text/javascript">
   (function(){
      emailjs.init("user_R9w7xWEadPBvicUTQDgPy");
   })();
</script>

<script>
var myform = $("form#myform");
myform.submit(function(event){
	event.preventDefault();

	var params = myform.serializeArray().reduce(function(obj, item) {
     obj[item.name] = item.value;
     return obj;
  }, {});

  // Change to your service ID, or keep using the default service
  var service_id = "default_service";

  var template_id = "template_Z749svtT";
  myform.find("button").text("Sending...");
  emailjs.send(service_id,template_id,params)
  	.then(function(){ 
       alert("Sent!");
       myform.find("button").text("Send");
     }, function(err) {
       alert("Send email failed!\r\n Response:\n " + JSON.stringify(err));
       myform.find("button").text("Send");
    });
  return false;
});
</script>

</body>
</html>
>>>>>>> 83ade076b3b32c65cbf45af3270da04e56b60dc2
