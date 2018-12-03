<!DOCTYPE html>
<body>
  <h1>Registration</h1>
    <form action="database.php" action="post">
 Username: <input type="text" name="firstname"><br>
 Password: <input type="password" name="password" id="password" onkeyup='check();'/><br>
 Confirm Password: <input type="password" name="confirmPassword" id="confirmPassword"  onkeyup='check();'/> <br>
  <span id='message'></span>
  <script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
  </script>
   </html>
