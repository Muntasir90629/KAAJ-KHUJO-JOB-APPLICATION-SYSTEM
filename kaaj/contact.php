<?php
$servername="localhost";
$username="root"; 
$password="";
$dbname="registrationform";

$conn= new mysqli($servername,$username,$password,$dbname);


if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
} 

if(isset($_POST['submit']))
{ 
$fname=$_POST['fname']; 
$lname=$_POST['lname']; 
$email=$_POST['email'];
$country=$_POST['country']; 
$subject=$_POST['subject'];
 
$sql="INSERT INTO `cont1`(`fname`, `lname`,`email`, `country`, `subject`) VALUES ('$fname','$lname','$email','$country','$subject')" ;
if ( $conn->query($sql) == true)
{
   echo " Message send successfully";
   } else {
      echo "Error: " . $sql . "" . mysqli_error($conn);
    }
  $conn->close();
}
?>




<html> 
<head> 
<style>

input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 4px; /* Rounded borders */
  box-sizing: border-box; /* Make sure that padding and width stays in place */
  margin-top: 6px; /* Add a top margin */
  margin-bottom: 16px; /* Bottom margin */
  resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
  background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}





ul {
  list-style-type: none;
  margin: 0;
  padding: 0PX;
  overflow: hidden;
  background-color: #009933;
   border-radius: 10px
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #660000;
</style>

</head> 
<body>




<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="about.html">About</a></li>
  <li><a href="contact.php">Contact</a></li>
  <li><a href="blog.html">Blog</a></li>
<li><a href="new-post.php">Post A Job</a></li>
<li><a href="registration.php">WANT A JOB</a></li>
</ul>

<div class="container">
  <form action="" method="post">

    <label for="fname">First Name</label>
    <input type="text" id="fname" name="fname" placeholder="Your name..">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lname" placeholder="Your last name">


   <label for="EMAIL">EMAIL</label>
    <input type="text" id="email" name="email" placeholder="example@yahoo.com">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="BANGLADESH">BANGLADESH</option>
      <option value="canada">Canada</option>
      <option value="usa">USA</option>
<option value="INDIA">INDIA</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:135px"></textarea>

    <input type="submit" name="submit" value="SEND"">

  </form>
</div>


</html>








