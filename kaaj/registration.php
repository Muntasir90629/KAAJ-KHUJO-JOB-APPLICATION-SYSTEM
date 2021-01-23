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
$mname=$_POST['mname']; 
$lname=$_POST['lname']; 
$address=$_POST['address'];
 $gender=$_POST['gender']; 
$phone=$_POST['phone'];
$skill=$_POST['skill'];

$ins=$_POST['ins'];


$CGPA=$_POST['CGPA'];
$year=$_POST['year'];
$birth=$_POST['birth'];





$email=$_POST['email']; 
$user=$_POST['username'];
$pass=$_POST['password'];
$sql="INSERT INTO `form`(`fname`, `mname`, `lname`, `address`, `gender`, `phone`,`skill`,`ins`,`CGPA`,`year`,`birth`, `email`, `username`, `password`) VALUES ('$fname','$mname','$lname','$address','$gender','$phone','$skill','$ins','$CGPA','$year','$birth','$email','$user','$pass')" ;
if ( $conn->query($sql) == true)
{
   echo "New record created successfully";
   } else {
      echo "Error: " . $sql . "" . mysqli_error($conn);
    }
  $conn->close();
}
?>


<html> 
<head>
<meta charset="utf-8">
<titLe> united document </title>

<style>




input[type=text], select, textarea {
  width: 100%; /* Full width */
  padding: 12px; /* Some padding */ 
  border: 1px solid #ccc; /* Gray border */
  border-radius: 10px; /* Rounded borders */
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




body {background-color: 	#e6e6e6;}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #009933;
border-radius: 10PX;
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
  background-color:#660000;
}
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


<form action="" method="post">
<table align= " center" > 
<tr> 
 <td> Name : </td> 
<td> <input type= "text" name="fname" 
    placeholder="enter your name " > </td> 
   <td>    <input type="text"  name="mname"
   placeholder="enter your middle name"  > </td> 
 
<td><input type="text"  name="lname"
   placeholder="enter your last name"  > </td> 
  </tr> 
<tr>
<td> ADDRESS : </td> 
<td> <input type="text" name="address" 
    placeholder=" ENTER YOUR ADDRESS" ></td>
</tr>
<tr> <td> gender : </td>
<td> <input type="radio" name="gender" value="female">FEMALE</td>
<td> <input type="radio" name="gender" value="male">MALE</td>
<td> <input type="radio" name="gender" value="other">OTHER</td>
</tr>
<tr> 
<td> PHONE :</td>
<td><input type="text" name="phone" 
   placeholder="ENTER YOUR PHONE NO"></td>
</tr> 
<tr> 

<td> SKILL </td> 
<td> <input type="text" name="skill" 
    placeholder=" ENTER YOUR skills" ></td>
</tr>

<tr>
<td> Institute  </td> 
<td> <input type="text" name="ins" 
    placeholder=" ENTER YOUR Institute Name " ></td>
</tr>

<tr>
<td> CGPA  </td> 
<td> <input type="text" name="CGPA" 
    placeholder=" ENTER YOUR CGPA" ></td>
</tr>
<tr>
<td> PASSING YEAR </td> 
<td> <input type="text" name="year" 
    placeholder="1980" ></td>
</tr>
<tr>
<td> DATE OF BIRTH </td> 
<td> <input type="text" name="birth" 
    placeholder="20/2/2014" ></td>
</tr>
<tr>
<td> EMAIL :  </td>
<td><input type="text" name="email"  
placeholder="example@example.com"> </td>
</tr>
<tr> 
<td> USER NAME : </td>    
<td>  <input type="text" name="username"
       placeholder="enter your username"></td> 
</tr>
<tr> 
<td> password:</td> 
<td> <input type="text"  name="password" </td> 
</tr>
<tr>
 <td> </td> 
<td> <input type="submit" name="submit"  value=" signUp" </td>
</tr>





</body>
</html>















</form>
</body>
</html>