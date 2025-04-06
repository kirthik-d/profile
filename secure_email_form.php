
let inputName = document.querySelector('#name') /* Creates the inputName variable and places in it the element that has the id name */
let inputEmail = document.querySelector('#email') /* Create the inputEmail variable and place in it the element that has the email id */
let textareaMessage = document.querySelector('#message') /* Creates the textareaMessage variable and places in it the element that has the message id */
let btnSend = document.querySelector('#submit') /* Creates the variable btnSend and places in it the element that has the id send */

/* I can only use the arrow function (=>) when the function has no name */

/* Add a keyup event to inputName and perform the function */
inputName.addEventListener('keyup', () => {
  /* Checks if the size of inputName value is less than 2 */
  if (inputName.value.length < 2) {
    inputName.style.borderColor = 'red' /* Changes the input border color to red */
  } else {
    inputName.style.borderColor = 'green' /* Changes the input border color to green */
  }
})


/* Add a keyup event to inputEmail and perform the function */
inputEmail.addEventListener('keyup', () => {
  /*
  The indexOf looks for a character in the inputEmail value, if this value does not exist it returns -1.
  So this expression inputEmail.value.indexOf('@') == -1 is the same thing as:
  If the inputEmail value does not exist @, do...

  || is the OR operator in JavaScript
  && is the AND operator in JavaScript
  */
  if (inputEmail.value.indexOf('@') == -1 || inputEmail.value.indexOf('.') == -1) {
    inputEmail.style.borderColor = 'red' /* Changes the input border color to red */
  } else {
    inputEmail.style.borderColor = 'green' /* Changes the input border color to green */
  }
})

/* Add a keyup event to textareaMessage and perform the function */
textareaMessage.addEventListener('keyup', () => {
  /* Checks if the size of the textareaMessage value is greater than 100 */
  if (textareaMessage.value.length > 100) {
    textareaMessage.style.borderColor = 'red' /* Changes the input border color to red */
  } else {
    textareaMessage.style.borderColor = 'green' /* Changes the input border color to green */
  }
})

/* Add a click event to btnSend and perform the function */
btnSend.addEventListener('click', () => {
  window.open('mailto:kirthikd0212@gmail.com?subject=subject&body=textareaMessage');
   
  alert('Form submitted successfully!') /* Display an alert on the screen with this message */
})

<!--
<!DOCTYPE html>
<html>
<head>
<title>FeedBack Form With Email Functionality</title>
<link href="css/elements.css" rel="stylesheet">
</head>
 
<body>
<div class="container">
 
<div id="feedback">
 
<div class="head">
<h3>FeedBack Form</h3>
<p>This is feedback form. Send us your feedback !</p>
</div>
 
<form action="#" id="form" method="post" name="form">
<input name="vname" placeholder="Your Name" type="text" value="">
<input name="vemail" placeholder="Your Email" type="text" value="">
<input name="sub" placeholder="Subject" type="text" value="">
<label>Your Suggestion/Feedback</label>
<textarea name="msg" placeholder="Type your text here..."></textarea>
<input id="send" name="submit" type="submit" value="Send Feedback">
</form>
 
</div>
 
</div>
</body>
 
</html>
Copy
PHP File: secure_email_code.php

As User fills the above Html form and clicks on send button, following php code will executes.
-->


<?php
session_start(); 
if(isset($_POST["submit"])) {
// Checking For Blank Fields..
if($_POST["vname"]==""||$_POST["vemail"]==""||$_POST["sub"]==""||$_POST["msg"]=="") {
echo "Fill All Fields..";
}else {
// Check if the "Sender's Email" input field is filled out
$email=$_POST['vemail'];
$from = $email;
// Sanitize E-mail Address
$email =filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate E-mail Address
$email= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$email){
echo "Invalid Sender's Email";
}
else {
$subject = $_POST['sub'];
$message = $_POST['msg'];

$headers = "From:" . $from;
// Message lines should not exceed 70 characters (PHP rule), so wrap it
$message = wordwrap($message, 70);
// Send Mail By PHP Mail Function
mail("kirthikd0212@gmail.com", $subject, $message, $headers);
echo "Your mail has been sent successfuly ! Thank you for your feedback";
}
}
}
?>