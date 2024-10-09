<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
.s::placeholder {
  background-color: rgb(120, 120, 255);
}

</style>
<head>
  <link rel="icon" type="image/x-icon" href="../Img/car_parts_logo.avif">
</head>
<body>

<h3>Using CSS to style an HTML Form</h3>

<div>
  <form>
    <label for="email">First Name</label>
    <input type="text" id="email" name="e-mail" placeholder="Your email...">

    <label for="fname">Last Name</label>
    <input type="text" id="fname" name="first-name" placeholder="Your first name...">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="last-name" placeholder="Your last name...">

    <label for="pass1">Last Name</label>
    <input type="text" id="pass1" name="password1" placeholder="Your password...">

    <label for="pass2">Last Name</label>
    <input type="text" id="pass2" name="password2" placeholder="Confirm your password...">

    <label for="company">Company</label>
    <select id="company" name="Company">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>

    <label for="profesion">Profesion</label>
    <select id="profesion" name="Profesion">
      <option value="australia">Australia</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
    </select>
    
    <input type="submit" value="Submit">
  </form>
</div>
<h5><a href="mehanic.php">link text</a></h5>
</body>
</html>


